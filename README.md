### Progetto CRUD generico con Laravel Jetstream
```
laravel new manuali
cd manuali
composer require laravel/jetstream
php artisan jetstream:install livewire --teams
npm install && npm run dev
```
CREO IL DB E LO SCRIVO IN .env
```CREATE DATABASE manuali CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;```
```
php artisan migrate
php artisan vendor:publish --tag=jetstream-views
php artisan make:seeder UserTableSeeder
php artisan make:model Project -a
php artisan make:model Manual -a
php artisan make:livewire Projects 
php artisan make:livewire Manuals
php artisan migrate
```
Aggiungo al menu la pagina Manuals e creo la view admin.manuals.blade


https://github.com/efureev/laravel-trees#moving-nodes

https://laravel-livewire.com/screencasts/s8-dragging-list

https://therealprogrammer.com/laravel-unlimited-hierarchical-category-tree-view/

