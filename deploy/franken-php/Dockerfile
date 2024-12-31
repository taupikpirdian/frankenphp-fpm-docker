FROM dunglas/frankenphp

# Enable PHP production settings
RUN mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"

# Copy aplikasi ke direktori kerja
WORKDIR /app
COPY /src/index.php public/

# Set CMD untuk menjalankan server
CMD ["frankenphp", "php-server", "-r", "/app/public"]
