#!/bin/bash

echo 'Init script starts'
composer install
cp .env.example .env
php artisan migrate
php artisan optimize
npm install
npm run dev
composer dump-autoload
php artisan db:seed
exit
