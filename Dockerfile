FROM allebb/phptestrunner-74:latest
COPY . /app
WORKDIR /app
CMD ["php", "./index.php"]
