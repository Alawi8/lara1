<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Http\Request;
use App\Http\Controllers\postsController;

use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\AdminController;

use App\Http\Controllers\HomeController;
use Spatie\Sitemap\SitemapGenerator;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now blade something great!
|
*/


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
    route::get ('login','index')                                 ->  name    ('login');
    route::post ('custom-login','customLogin')                   ->  name    ('login.custom');
    route::get ('registration','registration')                   ->  name    ('register-user');
    route::post ('custom-registration','customRegistration')     ->  name    ('register.custom');
    route::get ('signout','signOut')                             ->  name    ('signout');
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
    route::get ( '/posts/{title}/display/' , 'display')->name('display'); 

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
});


