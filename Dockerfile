FROM php:7.3-cli
WORKDIR /app
COPY . .
CMD ["php", "./index.php"]
