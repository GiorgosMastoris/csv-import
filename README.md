# Csv Import

## Install

### Local
Install and run the application locally.

#### Clone repostitory
Clone the repository 
```
git clone https://github.com/GiorgosMastoris/csv-import.git
```
#### Create database
Login to `mysql` with:
```
mysql -u <user> -p
```

and create a new database
```
CREATE DATABASE csvImport;
```

#### Update environment file

Open `/.env` and add your `mysql` credentials.
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=csvImport
DB_USERNAME=<mysql username>
DB_PASSWORD=<mysql password>
```

Run the `key:generate` artisan command on project root directory:
```
php artisan key:generate
```

#### Run the migrations

Run the `migrate` artisan command on project root, to generate the database schema:
```
php artisan migrate
```

#### Serve

Serve the application by running the `serve` artisan command, on project root directory.
```
php artisan serve
```

Your App is now running in [localhost:8000/](localhost:8000/)

Import tha csv File.

Enjoy!


Enjoy!
