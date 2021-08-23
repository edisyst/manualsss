<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

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
