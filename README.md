Creaiamo un database da phpmyadmin (es. train_db)
Creiamo una tabella trains e relativa Migration
Ogni treno dovrà avere:
Azienda
Stazione di partenza
Stazione di arrivo
Orario di partenza
Orario di arrivo
Codice Treno
Numero Carrozze
In orario
Cancellato
È probabile che siano necessarie altre colonne per far funzionare la tabella nel modo corretto :occhiolino:
Create il Model Train e
Aggiungete un seeder per la classe Train usando FakerPHP.
Create  relativo ed un Controller per mostrare nella home page tutti i treni che sono in partenza dalla data odierna.
Bonus:
Create  relativo Controller e rotta per mostrare tutti i treni che sono in partenza dalla data odierna.

## Installazione Laravel

```bash
cd your parent_folder_path

composer create-project --prefer-dist laravel/laravel:^9.2 your_project_name_here

cd your_project_name_here

code . -r

php artisan serve

ctrl + c

```
## Configurazione Laravel
```bash
composer require pacificdev/laravel_9_preset

php artisan preset:ui bootstrap

npm install

npm install --save @fortawesome/fontawesome-free

#in vite config aggiungo agli alias
'~@fortawesome': path.resolve(__dirname, 'node_modules/@fortawesome'),

#copio la cartella dei webfont e se voglio la rinomino

#installo dbal per migration e seeder
composer require doctrine/dbal


#comandi git

git init
git add .
git commit -m "first commit"
git branch -M main
git remote add origin your_git_url 
git push -u origin main


```
## Clono progetto da github 

```bash
# copio file .env.example e lo rinomino in .env

composer install

php artisan key:generate

npm install

# inserisco i dati per il collegamento al db in env

# creo il database da phpmyadmin

# creo migration
php artisan make:migration create_nome_tabella_table

php artisan make:migration update_users_table--table=users

php artisan make:migration add_phone_number_to_users_table

#lanciare migration
php artisan migrate

#revert migration
php artisan migrate:rollback


#popolare il db
php artisan make:seeder USersTableSeeder

php artisan db:seed --class=HouseTableSeeder
# preparo le rotte file web.php es. 
Route::get('/books', [BookController::class, 'index'])->name('books.index');

# creo controller
php artisan make:controller NomeController

#creo model
php artisan make:model Nome

# creo le views relative

```
