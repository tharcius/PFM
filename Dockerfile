FROM php:8.3-fpm

# Install system dependencies and PHP extensions
RUN apt-get update && \
    apt-get install -y --no-install-recommends \
    git \
    curl \
    libonig-dev \
    libpng-dev \
    libpq-dev \
    libxml2-dev \
    libzip-dev \
    zip \
    unzip && \
    docker-php-ext-install mbstring exif pcntl bcmath gd sockets zip && \
    apt-get clean && \
    rm -rf /var/lib/apt/lists/*

# Get latest Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Create system user to run Composer and Artisan Commands
ARG user
ARG uid

# Ensure the user and group exist, or create them
RUN groupadd --gid $uid $user 2>/dev/null || true && \
    useradd --uid $uid --gid $user --groups www-data --create-home --shell /bin/bash $user && \
    mkdir -p /home/$user/.composer && \
    chown -R $user:$user /home/$user

# Set working directory
WORKDIR /var/www

USER $user