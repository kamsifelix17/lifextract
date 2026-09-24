#!/bin/bash
set -e

# Configure Apache port based on Render's $PORT env variable (default 80)
PORT=${PORT:-80}
sed -i "s/Listen 80/Listen ${PORT}/g" /etc/apache2/ports.conf
sed -i "s/:80/:${PORT}/g" /etc/apache2/sites-available/000-default.conf

# Ensure database and storage directories exist with proper permissions
mkdir -p /var/www/html/storage/framework/{sessions,views,cache}
mkdir -p /var/www/html/storage/logs
mkdir -p /var/www/html/database

# If SQLite is configured and file doesn't exist, create it
if [ "${DB_CONNECTION}" = "sqlite" ] || [ -z "${DB_CONNECTION}" ]; then
    DB_PATH="${DB_DATABASE:-/var/www/html/database/database.sqlite}"
    touch "$DB_PATH"
fi

chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache /var/www/html/database
chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache /var/www/html/database

# Run database migrations
php artisan migrate --force || true

# Cache Laravel configurations for production
php artisan config:cache || true
php artisan route:cache || true
php artisan view:cache || true

# Execute the main container command (Apache foreground)
exec apache2-foreground
