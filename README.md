# Gestion  Ecole

## Install PHP and Composer

-http://windows.php.net/download/.

Décompressez le dossier PHP téléchargé à la racine de votre ordinateur dans un dossier C:\PHP et ajouter le dossier C:\PHP a votre PATH. 

- https://getcomposer.org/download/

php --version
composer --version

## Install  DB Mysql

## Run
```
composer create-project --prefer-dist laravel/laravel blog
cd blog
cp .env.example .env
composer install
composer require doctrine/dbal
php artisan cache:clear
php artisan config:cache
php  artisan  serve
```

**add extension=pdo_mysql  // php.ini

https://docs.faircom.com/doc/php/InstallPHP7withthePDOExtension.htm
##

http://localhost:8000/register

http://localhost:8000/home
