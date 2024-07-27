# Install
```shell
composer install
cp .env.example .env
php artisan key:generate

CREATE DATABASE manualsss CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

php artisan migrate:fresh --seed
php artisan serve
```

- C'è una rotta per creare alcuni elementi inalberati creati usando i metodi del package
- Riesco a spostare un ramo sotto un altro, ma finisce sempre in prima posizione, devo passargli anche la posizione
- Non riesco a spostare un elemento di liv.0 in un'altra posizione del liv.0
- Non riesco a spostare un elemento di liv.1-2-3 al liv.0 perchè non gli passo il parent_id (è NULL, devo gestirlo)

# Albero dei manuali
Ho fatto tre componenti in manuals/partials che uso in manuals.show
- uno viene da sample-lara-menuTreeview
- uno viene da sample-lara-treeview
- Dovrei ancora impaginare bene la visualizzazinoe del menu a sinistra dei manuali


## Package per la gestione e riordinamento dell'albero
- https://github.com/efureev/laravel-trees#moving-nodes
- https://laravel-livewire.com/screencasts/s8-dragging-list


## Package per popolare il DB (non necessario)
https://github.com/orangehill/iseed
- `composer require orangehill/iseed`
- `php artisan iseed my_table,another_table`

### Progetto CRUD generico con Laravel Jetstream
```bash
laravel new manuali
cd manuali
composer require laravel/jetstream
php artisan jetstream:install livewire --teams
npm install && npm run dev

php artisan migrate
php artisan vendor:publish --tag=jetstream-views
php artisan make:seeder UserTableSeeder
php artisan make:model Project -a
php artisan make:model Manual -a
php artisan make:livewire Projects 
php artisan make:livewire Manuals
php artisan migrate
```


