# Use official PHP Apache image
FROM php:8.1-apache

# Copy all project files to the Apache web directory
COPY . /var/www/html/

# Enable Apache mod_rewrite (if you use .htaccess)
RUN a2enmod rewrite

# Set home.php as the default page
RUN echo "DirectoryIndex home.php" > /etc/apache2/conf-available/directoryindex.conf \
    && a2enconf directoryindex

# Fix permissions (optional)
RUN chown -R www-data:www-data /var/www/html

# Expose port 80
EXPOSE 80
