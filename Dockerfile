FROM php:8.1-apache

# Copy project files
COPY . /var/www/html/

# Enable mod_rewrite
RUN a2enmod rewrite

# Allow .htaccess to override configs
RUN sed -i '/<Directory \/var\/www\/>/,/<\/Directory>/ s/AllowOverride None/AllowOverride All/' /etc/apache2/apache2.conf

# Set custom default page
RUN mv app/Views/home.php /var/www/html/index.php

# Permissions
RUN chown -R www-data:www-data /var/www/html

# Expose port 80
EXPOSE 80
