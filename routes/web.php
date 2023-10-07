<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\auth\CustomAuthController;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\home\HomeController;
use Spatie\Sitemap\SitemapGenerator;
use App\Http\Controllers\admin\AdminPagesController ;
use App\Http\Controllers\admin\MediaController;
use App\Http\Controllers\RelationController;
use App\Http\Controllers\Category\CategoryController;
use App\Http\Controllers\PostController;


/*
|--------------------------------------------------------------------------
| SEO Routes
|--------------------------------------------------------------------------
*/

Route::get('sitemap', function () {
    SitemapGenerator::create('https://laravel.test')->writeToFile('sitemap.xml');
    return 'sitemap created';
});
/*
|--------------------------------------------------------------------------
| home Routes
|--------------------------------------------------------------------------
*/


Route::controller(MediaController::class)->group(function(){
    route::get(      '/dash/media'        ,          'GetMedia'        ) -> name    ('dash.media')  ->      middleware('auth');
});

// admin page controllers
route::controller(AdminPagesController::class)->group(function (){
    // route::get(     '/dash/media'       ,       'show'               )  ->  name    ('dash.media')  ->       middleware("auth");
    route::get("/user/{id}/"      ,       'display') -> name ('user.display') ;
});

// relation test controller
route::controller(RelationController::class)-> group(function(){
    route::get('/relation'  ,       'relation')->name('relation');
});



//categures route API

Route::resource('posts', PostController::class)->middleware('auth');

################## begin relation route ######################
    route::controller( RelationController::class )->group(function (){
        route::get('relation' , 'relation')->name('relation');
    });
################## end relation route ######################
Route::resource('dash/category', CategoryController::class)->middleware('auth');




