FROM php:8.0-fpm-alpine

WORKDIR /app

COPY app .

CMD [ "php", "-S", "0.0.0.0:80"]