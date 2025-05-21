FROM php:8.1-apache

COPY . /var/www/html/

# Move your main PHP file to the web root and rename to index.php
RUN cp app/Views/home.php /var/www/html/index.php

RUN a2enmod rewrite

RUN chown -R www-data:www-data /var/www/html

EXPOSE 80
