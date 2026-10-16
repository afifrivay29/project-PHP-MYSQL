FROM php:8.2-cli

# Install ekstensi MySQLi yang dibutuhkan PHP Native
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Set folder kerja di dalam container
WORKDIR /app

# Copy seluruh file proyek ke folder kerja
COPY . /app

# Jalankan PHP Built-in Web Server di port 80
CMD ["php", "-S", "0.0.0.0:80"]

# Buka port 80
EXPOSE 80