#!/bin/sh

# Clean up any old containers
docker-compose down -v

# Bring up MySQL backend
docker-compose up -d mysql && sleep 5

# Download WordPress
docker-compose run --rm wp core download

# Start WordPress
docker-compose up -d wordpress && sleep 5

# Install BostonDSA Site
docker-compose run --rm wp sh -c '\
  wp core install \
    --url="${WP_URL}"  \
    --title="${WP_TITLE}" \
    --admin_user="${WP_ADMIN_USER}" \
    --admin_password="${WP_ADMIN_PASSOWRD}" \
    --admin_email="${WP_ADMIN_EMAIL}"'

# Install & Activate BostonDSA Theme
docker-compose run --rm wp sh -c '\
  wp theme install understrap; \
  wp theme install "${BOSTON_DSA_THEME}"; \
  wp theme activate Boston-DSA-Theme'
