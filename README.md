# Install
```bash
composer install
cp .env.example .env
php artisan key:generate

CREATE DATABASE manualsss CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

php artisan migrate
php artisan serve
```



### Progetto CRUD generico con Laravel Jetstream
```bash
laravel new manuali
cd manuali
composer require laravel/jetstream
php artisan jetstream:install livewire --teams
npm install && npm run dev
```

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


# Albero dei manuali
Ho fatto tre componenti in manuals/partials che uso in manuals.show
- uno viene da sample-lara-menuTreeview
- uno viene da sample-lara-treeview
- Dovrei ancora impaginare bene la visualizzazinoe del menu a sinistra dei manuali


# Popolare il DB 
https://github.com/orangehill/iseed
- `composer require orangehill/iseed`
- `php artisan iseed my_table,another_table`
