<?php

namespace App\Http\Middleware;

use Closure;

class AddResponseHeaders
{
    public function handle($request, Closure $next)
    {
        // إضافة إعدادات رأس الاستجابة هنا
        $response = $next($request);

        // مثال: إعداد Cache-Control
        $response->header('Cache-Control', 'public, max-age=31536000');

        return $response;
    }
}
