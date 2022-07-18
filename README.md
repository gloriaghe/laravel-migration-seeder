1) composer create-project --prefer-dist laravel/laravel:^7.0 .
2) npm install

3) composer require barryvdh/laravel-debugbar --dev //questo solo se voglio installarlo per debug

Per fake dati:

4) composer remove fzaninotto/faker
5) compose require fakerphp/faker

Tabella:

1) sistemare .env con password e node database creato su phpMyAdmin

2) php artisan make:migration create_trains_table (nome tabella plurale) ->crea migrazione tabella

3) php artisan migrate ->invia colonne tabella create nei file migrate

4) php artisan migrate:fresh -> per refreshare tutti i dati (se dopo l frase aggiungiamo --seed refresha anche i seeds)

5) se per modificare una tabella ci dice che manca un pacchetto docrtine dbal installare:
composer require doctrine/dbal:2.*

6) php artisan make:seeder TrainsTableSeeder ->creo il seeder per la migration Trains

7)php artisan make:model nomefilecontroller

8) quando il seeser è pronto lo metto nel file Databaseseeder nella cartella database scommentando la riga di esempio

9) php artisan db:seed --class=TrainsTableSeeder (salva i seeder di questo singolo file)

10) php artisan db:seed (se ho salvato i file nel file Databaseseeder posso mandare solo questo comando per salvare i dati)
