FROM php:7.4-apache


# Dependencies
RUN apt-get update \
    && apt-get install \
    git \
    curl \
    libzip-dev zip \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    unzip -y && \
    docker-php-ext-install zip pdo_mysql mbstring bcmath gd exif pcntl 

RUN a2enmod rewrite


# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/* && \
mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini" && \
mkdir /var/www/vanilla

ENV APACHE_RUN_USER www-data
ENV APACHE_RUN_GROUP www-data

# Get Composer
RUN cd ~ && \
curl -sS https://getcomposer.org/installer -o /tmp/composer-setup.php && \
HASH=`curl -sS https://composer.github.io/installer.sig` && \
php -r "if (hash_file('SHA384', '/tmp/composer-setup.php') === '$HASH') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;" && \
php /tmp/composer-setup.php --install-dir=/usr/local/bin --filename=composer

# Set working directory
WORKDIR /var/www/vanilla










