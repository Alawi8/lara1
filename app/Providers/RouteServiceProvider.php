<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * The path to the "home" route for your application.
     *
     * Typically, users are redirected here after authentication.
     *
     * @var string
     */
    public const HOME = '/home';

    /**
     * Define your route model bindings, pattern filters, and other route configuration.
     *
     * @return void
     */
    public function boot()
    {
        $this->configureRateLimiting();

        $this->routes(function () {
            Route::middleware('api')
                ->prefix('api')
                ->group(base_path('routes/api.php'));
            //route link defualt web.php
            Route::middleware('web')
                ->group(base_path('routes/web.php'));

            //route link admin/dashboard.php
            Route::prefix('dashboard')
                ->middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/admin/dashboard.php'));

            //route link home/home.php
            Route::prefix('')
                ->middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/home/home.php'));
            //route link auth/auth.php
            Route::prefix('auth')
                ->middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/Auth/auth.php'));

            Route::prefix('admin')
                ->middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/admin/dashboard.php'));
                
            Route::prefix('admin')
                ->middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/admin/photo.php'));

            Route::prefix('admin')
                ->middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/admin/settings.php'));

            Route::prefix('admin')
                ->middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/admin/categore.php'));

            Route::prefix('/home')
                ->middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/home/settings.php'));
            //posts 
            Route::prefix('/posts')
                ->middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/post/posts.php'));
        });
    }

    /**
     * Configure the rate limiters for the application.
     *
     * @return void
     */
    protected function configureRateLimiting()
    {
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60)->by($request->user()?->id ?: $request->ip());
        });
    }
}
