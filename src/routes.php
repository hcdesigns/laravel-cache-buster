<?php
Route::resource(config('cache-buster.url'), 'Hcdesigns\LaravelCacheBuster\CacheController', ['only' => [
    'index', 'store'
]]);