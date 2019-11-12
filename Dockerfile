FROM php:7.2-apache

RUN apt-get update \
    && apt-get install -y git zlib1g \
    && docker-php-ext-install pdo pdo_mysql zip unzip

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Enable Apache mod_rewrite.
RUN a2enmod rewrite