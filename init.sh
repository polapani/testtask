#!/bin/bash

echo 'Init script starts'

php artisan migrate
php artisan optimize
#npm install
#npm run dev
#composer dump-autoload
#cp .env.example .env
exit
