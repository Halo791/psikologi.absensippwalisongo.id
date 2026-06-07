FROM alpine:latest

# Setup document root
WORKDIR /var/www/html

# Install packages and remove default server definition
RUN apk add --no-cache \
  curl \
  dos2unix \
  nginx \
  nodejs \
  npm \
  php83 \
  php83-ctype \
  php83-curl \
  php83-dom \
  php83-fileinfo \
  php83-fpm \
  php83-gd \
  php83-intl \
  php83-json \
  php83-mbstring \
  php83-mysqli \
  php83-opcache \
  php83-openssl \
  php83-pdo_mysql \
  php83-pdo_pgsql \
  php83-phar \
  php83-session \
  php83-tokenizer \
  php83-xml \
  php83-xmlreader \
  php83-xmlwriter \
  php83-zip \
  supervisor

# Configure nginx
COPY config/nginx.conf /etc/nginx/nginx.conf

# Configure PHP-FPM
COPY config/fpm-pool.conf /etc/php83/php-fpm.d/www.conf
COPY config/php.ini /etc/php83/conf.d/custom.ini

# Configure supervisord
COPY config/supervisord.conf /etc/supervisor/conf.d/supervisord.conf

# Initial startScript
COPY startScript.sh /usr/local/bin/startScript.sh
RUN chmod +x /usr/local/bin/startScript.sh
RUN dos2unix /usr/local/bin/startScript.sh

# Create non-root user
RUN set -x ; \
  addgroup -g 1000 -S www-data ; \
  adduser -u 1000 -D -S -G www-data www-data && exit 0 ; exit 1

# Make sure files/folders needed by the processes are accessable when they run under the www-data user
RUN mkdir -p /run/nginx /run/php /var/log/php83 \
  && chown -R www-data:www-data /var/www/html /run /var/lib/nginx /var/log/nginx /var/log/php83

# Switch to use a non-root user from here on
USER www-data

# Add application
COPY --chown=www-data:www-data . /var/www/html/

# Expose the port nginx is reachable on
EXPOSE 8000

# Let supervisord start nginx & php-fpm
ENTRYPOINT ["startScript.sh"]

# Configure a healthcheck to validate that everything is up&running
HEALTHCHECK --timeout=10s CMD curl --silent --fail http://127.0.0.1:8000/fpm-ping
