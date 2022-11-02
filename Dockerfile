# Set master image
FROM php:7.4-fpm-alpine

# Set working directory
WORKDIR /app

# Install PHP Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Copy existing application directory
COPY . .

