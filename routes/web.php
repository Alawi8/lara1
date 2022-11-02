<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\postsController;
use PHPUnit\TextUI\XmlConfiguration\Group;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;

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

// route::controller(postsController::class )-> group(function(){
 
    

//     // route::get ( 'posts/display/{id}' , 'display')->name('display');

// });

 

/*
|--------------------------------------------------------------------------
| Web Routes Auth
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
    route::get ( '/posts' , 'show')->name('posts');
    route::get ( 'posts/display/{id}' , 'display')->name('display'); 

});



/*
|--------------------------------------------------------------------------
| admin Routes
|--------------------------------------------------------------------------
*/
route::controller(AdminController::class)->group(function(){
    route::get(     '/dash/header'      ,      'header'       )  ->  name    ('dash.header')   -> middleware('auth');
    route::get(     '/dash/create'      ,      'create'       )  ->  name    ('dash.create')   -> middleware('auth');
    route::get(     '/dash/display/'      ,      'display'       )  ->  name    ('dash.display')   -> middleware('auth');
    route::post(     '/dash/store/'       ,       'store'        )   ->  name    ('dash.store')    -> middleware('auth');

     route::get(     '/dash/dashboard/'      ,      'dashboard'       )  ->  name    ('dash.dashboard')   -> middleware('auth');
    // route::get(     ''      ,      ''       )  ->  name    ('')   -> middleware('auth');
    // route::get(     ''      ,      ''       )  ->  name    ('')   -> middleware('auth');
});


route::view('home/skech','home.pages.skech')->name('skech');

Route::get('/dash/dashbord', function () {
    return view ('admin.sb.addons.pages.dashboard');
})->middleware('auth')-> name('dashboard');

// Route::get('/profile/charts', function () {
//     return view ('admin.sb.addons.pages.charts');
// })->middleware('auth')-> name('charts');

// Route::get('/profile/tables', function () {
//     return view ('admin.sb.addons.pages.tables');
// })->middleware('auth')-> name('tables');

// // Route::get('/profile/index', function () {
// //     return view ('admin.sb.addons.pages.posts.index');
// // })->middleware('auth')-> name('index');

// Route::get('/profile/animation', function () {
//     return view ('admin.sb.addons.pages.animation');
// })->middleware('auth')-> name('animation');

// Route::get('/profile/cards', function () {
//     return view ('admin.sb.components.cards');
// })->middleware('auth')-> name('cards');

// Route::get('/profile/button', function () {
//     return view ('admin.sb.components.button');
// })->middleware('auth')-> name('button');



// Route::get('/profile/colors', function () {
//     return view ('admin.sb.addons.pages.colors');
// })->middleware('auth')-> name('colors');

// Route::get('/profile/border', function () {
//     return view ('admin.sb.addons.pages.border');
// })->middleware('auth')-> name('border');

// Route::get('/profile/other', function () {
//     return view ('admin.sb.addons.pages.other');
// })->middleware('auth')-> name('other');

// Route::get('/profile/edit', function () {
//     return view ('admin.sb.addons.posts.edit');
// })->middleware('auth')-> name('edit');




// Route::get('/profile/option', function () {
//     return view ('admin.sb.options.option');
// })->middleware('auth')-> name('options');



/* ------------------------------------------------------------------------------------------- 
|  route [ ADMIN ] page  
------------------------------------------------------------------------------------------- */
 Route::controller(PostsController::class)->group(function () {
    /*
    |--------------------------------------------------------------------------
    |  post type route
    |--------------------------------------------------------------------------
    */
     route::post('posts/create/', 'store')-> name('posts.create');
    //  route::post('dash/create/', 'store')-> name('dash.create');
//     route::post('admin/add/{id}', 'add')->name('admin.add');

    /*
    |--------------------------------------------------------------------------
    |  post type get
    |--------------------------------------------------------------------------
    */
    // route::get('profile/index', 'index')->name('index');
    // route::get('dash/display', 'index')->name('display');
//    route::get('posts/blade', 'blade')->name('posts.blade');
//     route::get('admin/edit/{id}', 'edit')->name('admin.edit');
//     route::get('admin/update/{id}', 'update')->name('admin.update');
//     route::get('admin/destroy/{id}', 'destroy')->name('admin.destroy');
//     route::get('admin/destroyAll/', 'destroy_all')->name('admin.destroyAll');
    

 });

 Route::get('generate-sitemap', function () {
    SitemapGenerator::create('http://localhost:8000/public_html/laravel')
        ->writeToFile(public_path('sitemap.xml'));
});