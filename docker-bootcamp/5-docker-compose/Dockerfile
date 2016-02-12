FROM php:5.6-apache

# Install PDO
RUN docker-php-ext-install pdo pdo_mysql

# Copy code
COPY . /var/www/html
