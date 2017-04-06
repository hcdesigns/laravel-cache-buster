<?php

namespace Hcdesigns\LaravelCacheBuster;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CacheController extends Controller
{
    public function index()
    {
        return 'hcdesigns/laravel-cache-buster';
    }

    public function store(Request $request)
    {
        CacheService::validateRequest($request);

        if($request->input('type') == 'all') {
            CacheService::clearAll();
            return json_encode('OK');
        }
        elseif($request->input('type') == 'view') {
            CacheService::clearViews();
            return json_encode('OK');
        }
        // Check cache key
        // Check tags
        abort('500', 'Invalid API request');
    }
}

