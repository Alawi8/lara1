<?php
// app/Http/Middleware/CspMiddleware.php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CspMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        $response = $next($request);

        // تحديد إعدادات CSP هنا
        $response->header('Content-Security-Policy', 'default-src \'self\'');

        return $response;
    }
}
