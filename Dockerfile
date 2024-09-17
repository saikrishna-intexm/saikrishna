FROM registry.digitalocean.com/intexmmedia/nginx-php-fpm:1.0
WORKDIR /var/www/html
COPY . /var/www/html

