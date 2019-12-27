# Project Requirements (With local Redis)

1. php:^7.2
2. redis:5.0.7

# Project setup (With local Redis)

1. Firstly clone the project from git repo.
    
    `https://github.com/mkawsar/laravel-redis.git`

2. Then copy the .env.example following
    1. `cd ${projectDir}`
    2. `cp .env.example .env`
3. Setup the Redis host and port in the .env file
4. Install the project dependency
    
    `composer install`
5. Finally run the project following the command

    `php artisan server`
    
# Note

Following the project REST api endpoint
1. Get all values (GET): `api/values`
2. Store (POST): `api/values`
3. Get by keys (GET): `api/value?keys=`
4. Update (PATCH): `api/values`
