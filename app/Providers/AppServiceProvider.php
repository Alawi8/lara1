<?php

namespace App\Providers;

use App\Models\Post;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrap();
        $posts = Post::latest('date')
        ->select('title', 'id', 'date');
        view()->share('posts', Post::latest('date')->select('title', 'image_path', 'date')->take(7)->get());
    
    }

    public function isSecure()
    {
        // 
    }
}
