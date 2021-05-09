# Second line runs a command to install the mysqli extension inside the container
FROM php:7.4-apache
#COPY src/ /var/www/html/
RUN docker-php-ext-install mysqli 