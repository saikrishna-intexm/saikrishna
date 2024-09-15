# Use Ubuntu 22.04 as the base image
FROM ubuntu:22.04

# Set non-interactive mode to avoid prompts during build
ENV DEBIAN_FRONTEND=noninteractive
RUN apt-get update -y && apt-get upgrade -y -q
RUN apt -y install software-properties-common
RUN add-apt-repository -y ppa:ondrej/nginx
RUN add-apt-repository -y ppa:ondrej/php
RUN apt update
RUN apt -y install php8.1
RUN apt -y install php8.1-fpm

RUN apt install -y \
    build-essential \
    libpng-dev \
    libfreetype6-dev \
    locales \
    zip \
    jpegoptim optipng pngquant gifsicle \
    vim \
    unzip \
    git \
    curl \
    php8.1-gd \
    php8.1-intl \
    php8.1-mysql \
    php8.1-xml \
    php8.1-curl \
    php8.1-common \
    php8.1-cli \
    php8.1-bcmath \
    php8.1-zip 
RUN apt install nginx -y
RUN apt install -y net-tools 
RUN apt-get install -y python3
RUN echo "\ndaemon off;" >> /etc/nginx/nginx.conf

# Copy Nginx configuration
COPY ./nginx/default.conf /etc/nginx/sites-available/default
# Set working directory
WORKDIR /var/www/html
# Expose port 80
EXPOSE 80
# Copy application code
COPY . /var/www/html
# Start Nginx and PHP-FPM
CMD service php8.1-fpm start && nginx

