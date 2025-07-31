FROM php:8.2-fpm

# Install system dependencies
# Install system dependencies and Node.js (for Vite build)
RUN apt-get update && \
    apt-get install -y \
    curl \
    gnupg \
    git \
    zip \
    unzip \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    libzip-dev \
    libpq-dev \
    nginx \
    supervisor \
    netcat-openbsd && \
    curl -fsSL https://deb.nodesource.com/setup_18.x | bash - && \
    apt-get install -y nodejs && \
    docker-php-ext-install pdo pdo_mysql pdo_pgsql zip && \
    apt-get clean && rm -rf /var/lib/apt/lists/*

RUN rm /usr/local/etc/php-fpm.d/zz-docker.conf

RUN sed -i 's|^listen = .*|listen = 127.0.0.1:10000|' /usr/local/etc/php-fpm.d/www.conf
RUN grep listen /usr/local/etc/php-fpm.d/*.conf


# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory to your Laravel root (inside COMMERCIAL)
WORKDIR /var/www/COMMERCIAL

# Copy Laravel project files
COPY . .
#COPY ./COMMERCIAL /var/www/COMMERCIAL

#  Build assets with Vite
RUN npm install && npm run build

# Install PHP dependencies
RUN composer install --no-dev --optimize-autoloader

# Set permissions
#RUN chown -R www-data:www-data /var/www/COMMERCIAL/storage /var/www/COMMERCIAL/bootstrap/cache
RUN chmod -R 775 storage bootstrap/cache
RUN chown -R www-data:www-data /var/www/COMMERCIAL


# Copy nginx and supervisor configs
RUN rm -f /etc/nginx/conf.d/default.conf /etc/nginx/sites-enabled/default
COPY ./nginx/nginx.conf /etc/nginx/nginx.conf
COPY ./nginx/default.conf /etc/nginx/conf.d/default.conf
COPY ./supervisord.conf /etc/supervisord.conf

EXPOSE 80 10000


RUN nginx -t
RUN ls -la /var/www/COMMERCIAL/public
RUN echo "=== NGINX CONFIG ===" && grep include /etc/nginx/conf.d/default.conf

CMD ["/usr/bin/supervisord", "-c", "/etc/supervisord.conf"]

#RUN mkdir -p /var/www/COMMERCIAL/storage/logs \ && chown -R www-data:www-data /var/www/COMMERCIAL/storage /var/www/COMMERCIAL/bootstrap/cache \
 #&& chmod -R 775 /var/www/COMMERCIAL/storage
#RUN cat /var/www/COMMERCIAL/storage/logs/laravel.log

# Set correct permissions
RUN mkdir -p \
    /var/www/COMMERCIAL/storage/app/public \
    /var/www/COMMERCIAL/storage/logs \
 && chown -R www-data:www-data /var/www/COMMERCIAL/storage /var/www/COMMERCIAL/bootstrap/cache \
 && chmod -R 775 /var/www/COMMERCIAL/storage /var/www/COMMERCIAL/bootstrap/cache

 RUN ls -la /var/www/COMMERCIAL/storage/app/public



