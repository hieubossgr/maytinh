FROM php:7.3-cli
WORKDIR /app
COPY . .
RUN install php-fpm
CMD ["php-fpm", "start"]
