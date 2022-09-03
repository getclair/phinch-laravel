## Laravel Phinch

A Laravel package for the Finch API SDK

### Installation

```shell
composer require hotmeteor/phinch-laravel
```

### Configuration

In your `config/services.php` file add:

```php
'finch' => [
    'client_id' => env('FINCH_CLIENT_ID'),
    'client_secret' => env('FINCH_CLIENT_SECRET'),
    'connect_redirect' => env('FINCH_CONNECT_REDIRECT_URI'),
],
```

Add the associated values to your .env file.
