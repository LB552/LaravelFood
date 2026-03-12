# The Food Store
Welcome to the admin interface for The Food Store, an online grocery store. The Food Store’s assortment of products is divided into categories.

## Installation and running
To install the full contents of the app, input the following commands into your terminal:
```
cd LaravelFood-main 
cd todo-app
composer install
cp .env.example .env
php artisan key:generate 
touch database/laravel.sqlite
php artisan migrate
php artisan db:seed
```

To run the site, input:
```
php artisan serve
```

## CRUD functionality
Existing categories and products can be edited or deleted by clicking "edit". New categories and products can be added by clicking "add".
