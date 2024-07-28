# Use the official PHP 7.4 Apache image
FROM php:7.4-apache

# Install system dependencies and PHP extensions
RUN apt-get update && apt-get install -y --no-install-recommends \
    libcurl4-openssl-dev \
    zip \
    unzip \
    git \
    && docker-php-ext-install -j$(nproc) \
    pdo_mysql \
    mysqli \
    json \
    curl \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# Enable mod_rewrite for Apache
RUN a2enmod rewrite

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Install Composer dependencies
COPY ../src/composer.json ./composer.json
# COPY ../src/composer.lock ./composer.lock
RUN composer install 

# Set the working directory in the container
WORKDIR /var/www/html

# Copy the rest of the application files
COPY ../src/ ./
