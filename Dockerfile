# Use official PHP Apache image
FROM php:8.1-apache

# Copy entire project to Apache web root
COPY . /var/www/html/

# Enable mod_rewrite (required for .htaccess to work)
RUN a2enmod rewrite

# Allow Apache to read .htaccess files
RUN sed -i 's/AllowOverride None/AllowOverride All/' /etc/apache2/apache2.conf

# Set permissions (optional, but good for avoiding access issues)
RUN chown -R www-data:www-data /var/www/html

# Expose port 80
EXPOSE 80
