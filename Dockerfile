# Use official PHP Apache image
FROM php:8.1-apache

# Copy all project files to the Apache web directory
COPY . /var/www/html/home.php


RUN a2enmod rewrite

RUN echo "DirectoryIndex home.php" > /etc/apache2/conf-available/directoryindex.conf \
    && a2enconf directoryindex

RUN chown -R www-data:www-data /var/www/html

EXPOSE 80