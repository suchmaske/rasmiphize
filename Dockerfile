FROM php:5.6-cli
RUN pecl install xdebug-2.5.5 \
    && docker-php-ext-enable xdebug \
    && apt-get update \
    && apt-get install -y zlib1g-dev libicu-dev g++ \
    && docker-php-ext-configure intl \
    && docker-php-ext-install intl \
    && apt-get install -y --no-install-recommends git zip \
    && curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer