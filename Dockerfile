FROM php:8.2-apache

RUN apt-get update && apt-get install -y \
        libicu-dev \
        libonig-dev \
        libxml2-dev \
        libzip-dev \
        libfreetype-dev \
        libjpeg62-turbo-dev \
        libpng-dev \
        libldap2-dev \
        libbz2-dev \
        unzip \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-configure ldap --with-libdir=lib/$(uname -m)-linux-gnu/ \
    && docker-php-ext-install \
        intl \
        mbstring \
        mysqli \
        pdo_mysql \
        xml \
        zip \
        gd \
        exif \
        bz2 \
        ldap \
        opcache \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

RUN a2enmod rewrite headers

WORKDIR /var/www/html

COPY docker/apache/default.conf /etc/apache2/sites-available/000-default.conf
COPY docker/php/custom.ini /usr/local/etc/php/conf.d/custom.ini

# Code is bind-mounted; image only needs runtime deps.
EXPOSE 80
