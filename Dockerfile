# Use an official PHP runtime as a parent image
FROM php:7.4-apache

# Copy your PHP files into the container
COPY . /var/www/html

# Install the PHP extensions and any other dependencies your application needs
RUN docker-php-ext-install mysqli

# Expose port 80 for web traffic
EXPOSE 80
