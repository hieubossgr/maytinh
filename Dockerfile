FROM php:7.3-cli
WORKDIR /app
COPY . .
RUN install php
CMD ["php-fpm", "start"]
