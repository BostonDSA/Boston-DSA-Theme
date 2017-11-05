# Boston DSA WordPress Theme

Bring up a local WordPress instance with the BostonDSA Theme installed.

Because this is meant to be run locally, the passwords for the MySQL backend & WordPress administrator are ***very*** weak.

**`Do not attempt to deploy this to any public-facing environment`**

## Requirements

You must have the latest version of [Docker](https://docker.com) installed.

* [Docker for Mac](https://www.docker.com/docker-mac)
* [Docker for Windows](https://www.docker.com/docker-windows)

## Setup

Open a new terminal window and navigate to this directory.

The order of operations will be:

* Starting the MySQL backend
* Downloading WordPress onto a local docker volume
* Starting the WordPress application
* Installing the WordPress site
* Installing the BostonDSA theme

#### MySQL Backend

```bash
# Start MySQL and sleep for 5s while it spins up
docker-compose up -d mysql && sleep 5
```

#### Download WordPress

```bash
docker-compose run --rm wp core download
```

#### Start WordPress

```bash
docker-compose up -d wordpress && sleep 5
```

#### Install WordPress Site

```bash
docker-compose run --rm wp sh -c '\
  wp core install \
    --url="${WP_URL}"  \
    --title="${WP_TITLE}" \
    --admin_user="${WP_ADMIN_USER}" \
    --admin_password="${WP_ADMIN_PASSOWRD}" \
    --admin_email="${WP_ADMIN_EMAIL}"'
```

#### Install BostonDSA Theme

```bash
docker-compose run --rm wp sh -c '\
  wp theme install understrap; \
  wp theme install "${BOSTON_DSA_THEME}"; \
  wp theme activate Boston-DSA-Theme'
```

#### Open Page

Navigate to [http://localhost:8000](http://localhost:8000) to view the new site.
