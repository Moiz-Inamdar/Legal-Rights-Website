FROM php:8.1-apache

# Copy all files and folders from your project root (where the Dockerfile is) to /var/www/html inside container
COPY . /var/www/html/

# If your main PHP file is NOT named index.php, but something else (like home.php), tell Apache to use that:
RUN echo "DirectoryIndex app/Views/home.php" > /etc/apache2/conf-available/directoryindex.conf && a2enconf directoryindex

# Enable mod_rewrite if you need .htaccess support
RUN a2enmod rewrite

# Set proper permissions for Apache user
RUN chown -R www-data:www-data /var/www/html

# Expose port 80
EXPOSE 80
