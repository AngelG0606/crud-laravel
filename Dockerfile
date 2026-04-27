FROM php:8.4-apache

# Extensiones necesarias
RUN apt-get update && apt-get install -y libpq-dev \
 && docker-php-ext-install pdo pdo_pgsql

# Apache config Laravel
RUN a2enmod rewrite
RUN sed -i 's|/var/www/html|/var/www/html/public|g' /etc/apache2/sites-available/000-default.conf

WORKDIR /var/www/html
COPY . .

# Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN composer install --no-dev --optimize-autoloader

# Permisos
RUN chown -R www-data:www-data /var/www/html \
 && chmod -R 775 storage bootstrap/cache

# Migraciones al arrancar
CMD php artisan migrate --force && apache2-foreground
