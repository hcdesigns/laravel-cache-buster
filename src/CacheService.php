<?php

namespace Hcdesigns\LaravelCacheBuster;

use Cache;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class CacheService
{
    /**
     * Clear application cache
     */
    public static function clearAll()
    {
        Cache::flush();
        self::clearViews();
    }

    /**
     * Clear view cache
     */
    public static function clearViews()
    {
        Artisan::call('view:clear');
    }

    public static function validateRequest(Request $request)
    {
        if(
            $request->input('api_key') &&
            $request->input('api_key') == config('cache-buster.api_key')
        ) {
            return true;
        }
        abort(403, 'Invalid API key');
    }
}