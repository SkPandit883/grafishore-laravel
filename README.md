# grafishore-laravel


## steps for setup projects
### 1. clone this repository
### 2. run command 
```bash
composer install
```

### 3.copy .env.example into .env file and  create database grafishore_task
### 4. run migration 
```bash
php artisan migrate
```
### 5.  store some initial data in the tables
 ```bash
 php artisan db:seed
 ```
### 6. generate api key for the api access in frontend
```bash
 php artisan apikey:generate
```
copy the key from the above table.

### 7. generate swagger api documentation
 ```bash
 php artisan l5-swagger:generate
 ```
 this command will generate the swagger api documentation

### 8. run the server

```bash
  php artisan serve

```
### 9. Now you can access the swagger api documentation
**http://127.0.0.1:8000/api/documentation**