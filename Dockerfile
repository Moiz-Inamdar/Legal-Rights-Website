# Use official PHP Apache image
FROM php:8.1-apache

# Copy all project files to the Apache web directory
COPY . /var/www/html/

# Enable Apache mod_rewrite (if you use .htaccess)
RUN a2enmod rewrite

# Set permissions if needed
RUN chown -R www-data:www-data /var/www/html

# Expose port 80
EXPOSE 80
