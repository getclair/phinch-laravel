## Laravel Phinch

A Laravel wrapper for the [Finch API SDK](https://github.com/getclair/phinch)

[![Latest Version on Packagist](https://img.shields.io/packagist/vpre/getclair/phinch-laravel.svg?style=flat-square)](https://packagist.org/packages/getclair/phinch-laravel)
![PHP from Packagist](https://img.shields.io/packagist/php-v/getclair/phinch-laravel)

### Installation

```shell
composer require hotmeteor/phinch-laravel
```

### Configuration

Publish the Phinch config:

```php
php artisan vendor:publish --tag=phinch
```

In your `config/services.php` file add:

```php
'finch' => [
    'client_id' => env('FINCH_CLIENT_ID'),
    'client_secret' => env('FINCH_CLIENT_SECRET'),
    'connect_redirect' => env('FINCH_CONNECT_REDIRECT_URI'),
],
```

Add the associated values to your .env file.

### Usage

TBD

### Documentation

See [Finch API docs](https://developer.tryfinch.com/)
