#!/bin/bash

chmod 777 wait-for-it.sh
dos2unix wait-for-it.sh

# npm run build

service php7.4-fpm start
service nginx restart

cp .env.example .env

php artisan key:generate
php artisan config:cache

echo "Waiting for db"
./wait-for-it.sh db:3306 -t 100
echo "db connedted"

# php artisan migrate:fresh --seed

php artisan storage:link

tail -f /dev/null