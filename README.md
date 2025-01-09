## Installation
 - You need install docker and docker-compose. See detail here https://docs.docker.com/compose/install/
 - Run `docker compose up -d` to start the container
 - Run `docker compose exec php-fpm composer install` to install the dependencies
 - Run `cp .env.example .env` to create the environment file
 - Run `docker compose exec php-fpm php artisan key:generate` to generate the application key
 - Run `docker compose exec php-fpm php artisan migrate` to migrate the database
 - Run `docker compose exec php-fpm php artisan db:seed` to seed the database
 - Open your browser and access to `http://localhost:8080` to see the application
