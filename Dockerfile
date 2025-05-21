# Use official PHP Apache image
FROM php:8.1-apache

# Copy the specific file as index to the web root
COPY app /var/www/html/index.php

# Enable mod_rewrite (optional, useful for .htaccess)
RUN a2enmod rewrite

# Set permissions
RUN chown -R www-data:www-data /var/www/html

# Expose port 80
EXPOSE 80
