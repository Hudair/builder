FROM php:5.6-apache

RUN apt-get update && apt-get upgrade -y && apt-get install -y zlib1g-dev
RUN docker-php-ext-install zip

ADD . /var/www/html
RUN chown www-data:www-data -R /var/www/html