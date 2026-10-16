FROM php:8.2-apache

# Matikan modul mpm_event yang bentrok dan aktifkan mpm_prefork
RUN a2dismod mpm_event || true \
    && a2dismod mpm_worker || true \
    && a2enmod mpm_prefork

# Install ekstensi MySQLi
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Copy file proyek ke web server
COPY . /var/www/html/

# Buka port 80
EXPOSE 80