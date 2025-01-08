FROM php:8.2-fpm

ENV TERM xterm

RUN apt-get update && apt-get install -y \
    libpq-dev \
    libmemcached-dev \
    curl \
    libjpeg-dev \
    libpng-dev \
    libfreetype6-dev \
    libssl-dev \
    libmcrypt-dev \
    vim \
    libzip-dev \
    zlib1g-dev libicu-dev g++ \
    --no-install-recommends \
    && rm -r /var/lib/apt/lists/*

# configure gd library
RUN docker-php-ext-configure gd --enable-gd --with-jpeg --with-freetype

# configure intl
RUN docker-php-ext-configure intl

# Install xdebug
#RUN pecl install xdebug \
#    && docker-php-ext-enable xdebug

RUN pecl install mongodb && docker-php-ext-enable mongodb

# Install extensions using the helper script provided by the base image
RUN docker-php-ext-install \
    bcmath \
    pdo_mysql \
    pdo_pgsql \
    gd \
    intl \
    zip

RUN usermod -u 1000 www-data

WORKDIR /var/www/laravel

ADD ./laravel.ini /usr/local/etc/php/conf.d
ADD ./laravel.pool.conf /usr/local/etc/php-fpm.d/

CMD ["php-fpm"]

EXPOSE 9000
