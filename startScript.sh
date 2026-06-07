#!/bin/sh
set -e

app_env_generator() {
  cd /var/www/html

  export DB_HOST="${DB_HOST:-localhost}"
  export DB_PORT="${DB_PORT:-3306}"

  if [ -z "${DB_NAME}" ] && [ -n "${DB_DATABASE}" ]; then
    export DB_NAME="${DB_DATABASE}"
  fi

  if [ -z "${DB_DATABASE}" ] && [ -n "${DB_NAME}" ]; then
    export DB_DATABASE="${DB_NAME}"
  fi

  export DB_NAME="${DB_NAME:-psiunmerac_data}"
  export DB_DATABASE="${DB_DATABASE:-$DB_NAME}"

  if [ -z "${DB_USER}" ] && [ -n "${DB_USERNAME}" ]; then
    export DB_USER="${DB_USERNAME}"
  fi

  if [ -z "${DB_USERNAME}" ] && [ -n "${DB_USER}" ]; then
    export DB_USERNAME="${DB_USER}"
  fi

  export DB_USER="${DB_USER:-psiunmerac_data}"
  export DB_USERNAME="${DB_USERNAME:-$DB_USER}"

  if [ -z "${DB_PASS}" ] && [ -n "${DB_PASSWORD}" ]; then
    export DB_PASS="${DB_PASSWORD}"
  fi

  if [ -z "${DB_PASSWORD}" ] && [ -n "${DB_PASS}" ]; then
    export DB_PASSWORD="${DB_PASS}"
  fi

  export DB_PASS="${DB_PASS:-Berkah_25}"
  export DB_PASSWORD="${DB_PASSWORD:-$DB_PASS}"
}

app_env_generator

exec /usr/bin/supervisord -c /etc/supervisor/conf.d/supervisord.conf
