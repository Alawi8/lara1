<?php

namespace App\Providers;

use App\Models\Post;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;

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
        if( !isset($posts) || $posts === null ) {
            $posts = Post::latest('date')->select('title', 'id', 'date','time','image_path','exept')->take(7)->get();
            
            View::share('posts', $posts);
        }
    }

    public function isSecure()
    {
        // 
    }
}
