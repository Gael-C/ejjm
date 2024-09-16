FROM php:8.2-fpm

# Copier les fichiers de configuration
COPY php.ini /usr/local/etc/php/
COPY docker.conf /usr/local/etc/php-fpm.d/docker.conf
COPY .bashrc /root/

# Installer les dépendances et extensions PHP
RUN apt-get update && apt-get install -y \
    build-essential \
    zlib1g-dev \
    default-mysql-client \
    curl \
    gnupg \
    procps \
    vim \
    git \
    unzip \
    libzip-dev \
    libpq-dev \
    libicu-dev \
    && docker-php-ext-install zip pdo_mysql pdo_pgsql pgsql intl \
    && pecl install redis \
    && docker-php-ext-enable redis \
    && pecl install pcov \
    && docker-php-ext-enable pcov

# Installer Node.js et npm
RUN curl -sL https://deb.nodesource.com/setup_18.x | bash - \
    && apt-get install -y nodejs \
    && npm install npm@latest -g

# Installer Composer
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" \
    && php composer-setup.php \
    && php -r "unlink('composer-setup.php');" \
    && mv composer.phar /usr/local/bin/composer

# Configuration de Composer
ENV COMPOSER_ALLOW_SUPERUSER 1
ENV COMPOSER_HOME /composer
ENV PATH $PATH:/composer/vendor/bin
RUN composer config --global process-timeout 3600 \
    && composer global require "laravel/installer"

# Configurer le répertoire de travail
WORKDIR /var/www

# Exposer le port pour Vite
EXPOSE 5173