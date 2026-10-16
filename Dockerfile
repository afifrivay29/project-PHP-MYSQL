FROM php:8.2-apache

# Pastikan hanya satu MPM yang aktif
RUN a2dismod mpm_event mpm_worker \
    && a2enmod mpm_prefork \
    && apache2ctl configtest