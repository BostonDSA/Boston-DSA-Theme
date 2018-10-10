#!/bin/sh

# Clean up any old containers
function cleanup {
    docker-compose down -v
}

# Bring up MySQL backend
function launch-mysql {
    docker-compose up -d mysql && sleep 15
}

# Download WordPress
function download-wordpress {
    docker-compose run --rm wp core download
}

# Start WordPress
function launch-wordpress {
    docker-compose up -d wordpress && sleep 5
}

# Install BostonDSA Site
function initialize-wordpress {
    docker-compose run --rm wp sh -c '\
      wp core install \
        --url="${WP_URL}"  \
        --title="${WP_TITLE}" \
        --admin_user="${WP_ADMIN_USER}" \
        --admin_password="${WP_ADMIN_PASSOWRD}" \
        --admin_email="${WP_ADMIN_EMAIL}"'
}

# Connect to MySQL (as root)
function connect-db {
    docker-compose run --rm mysql sh -c '\
      exec mysql --host=docker_mysql_1 --user=root --password="${MYSQL_ROOT_PASSWORD}" ${MYSQL_DATABASE}'
}

# Drop existing DB and then load a MySQL dump from file
function drop-and-load-db {
    echo "Dropping database..."
    docker-compose run --rm mysql sh -c '\
      exec mysql --host=docker_mysql_1 --user=root --password="${MYSQL_ROOT_PASSWORD}" \
        -e "DROP DATABASE IF EXISTS ${MYSQL_DATABASE}; CREATE DATABASE IF NOT EXISTS ${MYSQL_DATABASE};"'
    echo "Loading MySQL dump file ($1)..."
    docker exec -i docker_mysql_1 mysql -uroot -psomewordpress wordpress < $1
}

function update-url {
    docker-compose run --rm wp sh -c '\
      wp option update siteurl "http://${WP_URL}"; \
      wp option update home "http://${WP_URL}"'
}

# The default user gets blown away during a database load,
# add it back in.
function create-admin-user {
    docker-compose run --rm wp sh -c '\
      wp user create ${WP_ADMIN_USER} ${WP_ADMIN_EMAIL} --user_pass=${WP_ADMIN_PASSWORD} --role=administrator'
}

# Install plugins
function install-plugins {
    docker-compose run --rm wp sh -c '\
      wp plugin install ${WP_PLUGINS} --activate'
}

# Install BostonDSA Theme
function install-theme {
    docker-compose run --rm wp sh -c 'wp theme install understrap'
}

# This file is "required" in the theme
function get-bootstrap-navwalker {
    echo "Downloading bootstrap navwalker"
    curl -o ../class-wp-bootstrap-navwalker.php https://raw.githubusercontent.com/wp-bootstrap/wp-bootstrap-navwalker/master/class-wp-bootstrap-navwalker.php
}

# Activate BostonDSA Theme
# The theme is loaded as a bind mount so share the volume from the wordpress
# install with the CLI.
function activate-theme {
    docker run -it --rm \
	   --volumes-from docker_wordpress_1 \
	   --network container:docker_wordpress_1 \
	   wordpress:cli theme activate boston-dsa-theme
}

# If this file is being executed run through the install. If this file gets
# sourced it will just load the functions.
# $1 can be an optional MySQL dump file to load
if [[ "$(basename -- "$0")" == "docker-compose-install.sh" ]]; then
    cleanup
    launch-mysql
    download-wordpress
    launch-wordpress
    initialize-wordpress

    if [ ! -z $1 ]
    then
	drop-and-load-db $1
	update-url
	create-admin-user
    fi

    install-plugins
    install-theme
    get-bootstrap-navwalker
    activate-theme

fi
