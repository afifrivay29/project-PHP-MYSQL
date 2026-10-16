FROM php:8.2-apache

# Install ekstensi MySQLi yang dibutuhkan PHP Native
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Copy semua file proyek ke folder Apache
COPY . /var/www/html/

# Buka port 80
EXPOSE 80