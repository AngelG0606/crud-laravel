#!/bin/bash

set -e

echo "⏳ Esperando a MySQL en $DB_HOST..."

until php -r "
try {
    new PDO('mysql:host=' . getenv('DB_HOST') . ';port=' . getenv('DB_PORT'),
            getenv('DB_USERNAME'),
            getenv('DB_PASSWORD'));
    echo 'DB OK';
} catch (Exception \$e) {
    exit(1);
}
"; do
  sleep 2
done

echo "✅ MySQL listo"

# Permisos (por si el volumen los rompe)
chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Solo correr migraciones si no existen tablas
if [ ! -f /var/www/html/storage/.migrated ]; then
  echo "🚀 Ejecutando migraciones..."
  php artisan migrate --force

  echo "🌱 Ejecutando seeders..."
  php artisan db:seed --force

  touch /var/www/html/storage/.migrated
else
  echo "⚠️ Migraciones ya ejecutadas, saltando..."
fi

echo "🔥 Iniciando Apache..."
exec apache2-foreground
