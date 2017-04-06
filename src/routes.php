<?php
use Hcdesigns\LaravelCacheBuster\CacheService;

Route::resource(config('cache-buster.url'), 'Hcdesigns\LaravelCacheBuster\CacheController', ['only' => [
    'index', 'store'
]]);