# Laravel Cache Buster

Invalidate cache + blade view cache by posting to a URL.

## Installation
Require this package with composer:

```shell
composer require hcdesigns/laravel-cache-buster
```

Add this package to your project in app.php:
```php
Hcdesigns\LaravelCacheBuster\CacheServiceProvider::class,
```

Initialize this package:
```shell
php artisan vendor:publish
```

## Customization
In config/cache-buster.php you can edit your API key and customize your URL

## Usage
POST via curl or a browser to:
> http://example.com/hcdesigns-laravel-cache-buster

with parameters: api_key (config/cache-buster.php) and type (all, view)

## To Do
Allow clearing cache by key and tags
