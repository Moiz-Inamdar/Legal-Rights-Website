# Use official PHP Apache image
FROM php:8.1-apache

# Copy everything
COPY . /var/www/html/

# Enable mod_rewrite for clean URLs
RUN a2enmod rewrite

# Update Apache config to allow .htaccess in /var/www/
RUN sed -i '/<Directory \/var\/www\/>/,/<\/Directory>/ s/AllowOverride None/AllowOverride All/' /etc/apache2/apache2.conf

# Set permissions
RUN chown -R www-data:www-data /var/www/html

# Expose port 80
EXPOSE 80
