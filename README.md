1) composer create-project --prefer-dist laravel/laravel:^7.0 .
2) npm install

3) composer require barryvdh/laravel-debugbar --dev //questo solo se voglio installarlo per debug

Per fake dati:
4) composer remove fzaninotto/faker
5) compose require fakerphp/faker

Tabella:
1) sistemare .env con password e node database creato su phpMyAdmin
2) php artisan make:migration create_trains_table (nome tabella plurale)
3)