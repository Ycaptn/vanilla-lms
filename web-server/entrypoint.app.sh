#!/bin/bash

set -e

env

if [[ -n "$1" ]]; then
    exec "$@"
else
    composer install
    php artisan migrate 
    php artisan key:generate
    php artisan db:seed
    # chown -R www-data:www-data storage
    exec apache2-foreground
fi
