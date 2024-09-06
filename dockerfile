FROM php:8.2-fpm

# Installer les dépendances
RUN apt-get update && apt-get install -y \
    nginx \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    git \
    curl

# Nettoyer le cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Installer les extensions PHP
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Obtenir la dernière version de Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Définir le répertoire de travail
WORKDIR /var/www/html

# Copier le code de l'application
COPY . .

# Installer les dépendances de l'application
RUN composer install --no-dev --optimize-autoloader

# Copier la configuration Nginx
COPY nginx.conf /etc/nginx/sites-available/default

# Générer la clé de l'application
RUN php artisan key:generate

# Effectuer les optimisations Laravel
RUN php artisan config:cache
RUN php artisan route:cache
RUN php artisan view:cache

# Définir les permissions correctes
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Exposer le port 80
EXPOSE 80

# Démarrer Nginx et PHP-FPM
CMD sh -c "service php8.2-fpm start && nginx -g 'daemon off;'"
