FROM php:8.2.3-fpm

RUN apt-get update && apt-get install -y \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libpng-dev \
    git \
    zip \
    unzip \
    libpq-dev

# Install & configure extensions
RUN docker-php-ext-install -j$(nproc) gd \
    && docker-php-ext-configure gd --with-freetype --with-jpeg

# Get Composer
COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer
RUN composer install

# Clean up apt cache
RUN rm -rf /var/lib/apt/lists/*