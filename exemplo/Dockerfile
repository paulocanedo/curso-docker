# syntax=docker/dockerfile:1

FROM node:latest as builder-js

WORKDIR /app

COPY ./package.json .

RUN yarn install

# ----------------------------------------------
FROM composer:latest as builder-php

WORKDIR /app

COPY composer.json composer.lock .

RUN composer install
# ----------------------------------------------

FROM php:8.1-apache

# WORKDIR /var/www/html

RUN docker-php-ext-install pdo pdo_mysql mysqli && \
    docker-php-ext-configure mysqli --with-mysqli=mysqlnd && \
    docker-php-ext-configure pdo_mysql --with-pdo-mysql=mysqlnd


RUN pecl install redis \
    && pecl install xdebug \
    && docker-php-ext-enable redis xdebug

COPY ./etc/php-conf/sessao-redis.ini $PHP_INI_DIR/conf.d/sessao_redis.ini

COPY ./src/ /var/www/html
COPY --from=builder-js /app/node_modules/ /var/www/node_modules/
COPY --from=builder-php /app/vendor/ /var/www/vendor/
