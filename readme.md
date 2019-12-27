# Project Setup (With Docker)

# Requirements
1. Docker

# Setup
1. Firstly clone the project from git repo.
    
    `https://github.com/mkawsar/laravel-redis.git`
2. Build the docker images and container with following the command
    1. Go to the project directory `cd {projectDir}`
    2. `docker-compose up --build -d`
3. Run the following the command for project server run
    1. `docker-compose run app cp .env.example .env`
    2. `docker-compose run app composer install`
    3. `docker-compose run app php artisan key:generate`
4. Finally following the REST api endpoint
    1. Store data (`POST`): 
        
        `0.0.0.0:8101/api/values`
    
        1. Example `{"item1": "test 1", "item2": "test 2"}`
    2. Get all data (`GET`): 
        
        `0.0.0.0:8101/api/values`
    3. Get store data using keys url params (`GET`): 
    
        `0.0.0.0:8101/api/value?keys=item1,item2`
    4. Update the data (`PATCH`): 
        
        `0.0.0.0:8101/api/values`
        1. Example `{"item1": "test 1", "item2": "test 2"}`

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
3. Get by keys (GET): `api/value??keys=item1,item2`
4. Update (PATCH): `api/values`
