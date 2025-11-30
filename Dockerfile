# Use official PHP + Apache image
FROM php:8.2-apache

# Install PHP extensions your app needs
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Copy project files into the web root
COPY . /var/www/html/

# Cloud Run requires port 8080, not 80  
RUN sed -i 's/80/8080/g' /etc/apache2/ports.conf \
 && sed -i 's/:80/:8080/g' /etc/apache2/sites-enabled/000-default.conf

# Cloud Run expects this environment variable
ENV PORT=8080

EXPOSE 8080

# Start Apache
CMD ["apache2-foreground"]
