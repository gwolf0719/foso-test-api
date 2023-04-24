# Use the official PHP image as the base image
FROM php:7.4-apache

# Copy the contents of the app directory to the container
COPY . /var/www/html/

# Install dependencies
RUN apt-get update && \
    apt-get install -y \
        libzip-dev \
        zip && \
    docker-php-ext-install zip pdo_mysql && \
    curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer && \
    composer install --no-dev --no-interaction --prefer-dist --optimize-autoloader --no-progress && \
    rm -rf /root/.composer/cache

# Set the working directory to the app directory
WORKDIR /var/www/html

# Expose port 8080 and start the Apache server
EXPOSE 8080
CMD ["apache2-foreground"]