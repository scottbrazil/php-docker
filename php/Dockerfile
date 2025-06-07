FROM php:8.3-fpm-bookworm

RUN apt-get update

RUN apt-get install -y \
    libzip-dev \
    zip \
  && docker-php-ext-install zip

RUN apt-get install libldap2-dev -y && \
    rm -rf /var/lib/apt/lists/* && \
    docker-php-ext-configure ldap --with-libdir=lib/x86_64-linux-gnu/ && \
    docker-php-ext-install ldap

RUN docker-php-ext-install pdo pdo_mysql

ENV COMPOSER_ALLOW_SUPERUSER=1

COPY --from=composer:2.8 /usr/bin/composer /usr/bin/composer

COPY ./app/composer.* ./

RUN composer install --prefer-dist --no-dev --no-scripts --no-progress --no-interaction

RUN apt-get update && apt-get clean && apt-get install -y build-essential
RUN apt-get install software-properties-common -y
RUN apt update
RUN apt-get install -y python3.10 
RUN apt-get install -y python3-pip
RUN apt install -y python3-requests

RUN apt-get update && \
    apt-get install -y sudo && \
    rm -rf /var/lib/apt/lists/*

COPY ./app .

RUN composer dump-autoload --optimize