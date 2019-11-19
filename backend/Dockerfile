FROM php:7.2.9-fpm
#install composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
#install git
RUN apt-get update && \
    apt-get upgrade -y && \
    apt-get install -y git

WORKDIR /var/www
COPY composer.json /var/www/composer.json
COPY composer.lock /var/www/composer.lock
COPY . /var/www
RUN composer install --prefer-source
RUN composer dump-autoload --optimize

