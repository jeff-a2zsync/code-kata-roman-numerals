FROM composer:2

# Install necessary dependencies
RUN apk add --no-cache \
    autoconf \
    build-base \
    curl-dev \
    linux-headers \
    make \
    zlib-dev \
    && pecl install xdebug \
    && docker-php-ext-enable xdebug \
    && apk del --no-cache \
    autoconf \
    build-base \
    linux-headers \
    make