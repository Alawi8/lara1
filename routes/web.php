<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Http\Request;
use App\Http\Controllers\auth\CustomAuthController;
use App\Http\Controllers\admin\AdminController;

use App\Http\Controllers\home\HomeController;
use Spatie\Sitemap\SitemapGenerator;
use App\Http\Controllers\admin\AdminPagesController ;
use App\Http\Controllers\admin\MediaController;
use App\Http\Controllers\RelationController;
use App\Http\Controllers\CategoryController;
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
| Auth Routes
|--------------------------------------------------------------------------
*/


Route::controller(CustomAuthController::class)-> group(function(){
    // login  users
    route::get ('login','index')                                 ->  name    ('login');
    route::post ('custom-login','customLogin')                   ->  name    ('login.custom');
    // register users
    route::get ('registration','registration')                   ->  name    ('register-user');
    route::post ('custom-registration','customRegistration')     ->  name    ('register.custom');
    route::get ('signout','signOut')                             ->  name    ('signout');
    // route::post ('dashboard','dashboard')                         ->  name    ('dashboard');
});
/*
|--------------------------------------------------------------------------
| home Routes
|--------------------------------------------------------------------------
*/
route::controller(HomeController::class)-> group(function(){
    route::get ('privce-policy','policy')-> name('policy');
    route::get ('about','about')-> name('about');
    route::get ('faq/','faq')-> name('faq');
    route::get ( '/' , 'show')->name('home');
    route::get ( '/posts/{title}/' , 'display')->name('display'); 

});
/*
|--------------------------------------------------------------------------
| admin Routes
|--------------------------------------------------------------------------
*/
route::controller(AdminController::class)->group(function(){
    route::get(     '/dash/header'      ,      'header'              )  ->  name    ('dash.header')   -> middleware('auth');
    route::get(     '/dash/create'      ,      'create'              )  ->  name    ('dash.create')   -> middleware('auth');
    route::get(     '/dash/display/'      ,      'display'           )  ->  name    ('dash.display')   -> middleware('auth');
    route::post(     '/dash/store/'       ,       'store'            )  ->  name    ('dash.store')    -> middleware('auth');
    
    //update dash
    route::get(    '/dash/edit/{id}'      ,      'edit'              )  ->  name    ('dash.edit')   -> middleware('auth');
    route::post(    '/dash/update/{id}'      ,      'update'         )  ->  name    ('dash.update')   -> middleware('auth');

    route::get(     '/dash/dashboard/'      ,      'dashboard'       )  ->  name    ('dash.dashboard')   -> middleware('auth');
    route::get(     '/dash/profiles/'      ,      'profile'          )  ->  name    ('dash.profile')   -> middleware('auth');
    route::get(     '/dash/navigation/'      ,      'navigation'     )  ->  name    ('dash.navigation')   -> middleware('auth');

    // page seo optimization
    route::get(     '/dash/seo'      ,      'seo'                    )  ->  name    ('dash.seo')   -> middleware('auth');
    route::get(     '/dash/SeoUpdate/{id}'      ,      'SeoUpdate'   )  ->  name    ('dash.SeoUpdate')   -> middleware('auth');
    route::post(     '/dash/SeoPost/{id}'      ,      'SeoPost'      )  ->  name    ('dash.SeoPost')   -> middleware('auth');
    route::get(     '/dash/shell/'      ,      'shell'      )  ->  name    ('dash.shell')   -> middleware('auth');
});
// 
Route::controller(MediaController::class)->group(function(){
    route::get(      '/dash/media'        ,          'GetMedia'        ) -> name    ('dash.media')  -> middleware('auth');
});

// admin page controllers
route::controller(AdminPagesController::class)->group(function (){
    // route::get(     '/dash/media'       ,       'show'               )  ->  name    ('dash.media')  -> middleware("auth");
    route::get("/user/{id}/"      ,       'display') -> name ('user.display') ;
});

// relation test controller
route::controller(RelationController::class)-> group(function(){
    route::get('/relation'  ,       'relation')->name('relation');
});



//categures route API

Route::resource('posts', PostController::class);

################## begin relation route ######################
    route::controller( App\Http\Controllers\Category\CategoryController::class )->group(function (){
        route::get('relation' , 'index')->name('relation');
    });
################## end relation route ######################


