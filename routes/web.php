<?php

// use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\auth\CustomAuthController;
// use App\Http\Controllers\admin\AdminController;
use Spatie\Sitemap\SitemapGenerator;
use App\Http\Controllers\admin\AdminPagesController ;
// use App\Http\Controllers\admin\MediaController;
use App\Http\Controllers\RelationController;
use App\Http\Controllers\Category\CategoryController;
// use App\Http\Controllers\PostController;
use App\Http\Controllers\home\HomeController;
use Laravel\Ui;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Livewire\PostsList;
use App\Http\Controllers\media\ImageController;
use App\Http\Livewire\ShowPosts;
use App\Http\Controllers\home\HomeCategoryController;




/*
|-------------------------------------------------------------------------->
| Web Routes
|-------------------------------------------------------------------------->
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('sitemap/create', function () {
    $baseUrl = config('app.url'); // استخدم متغير البيئة للحصول على عنوان موقعك

    SitemapGenerator::create($baseUrl)->writeToFile('sitemap.xml');
    
    return 'sitemap created';
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

################## begin relation route ######################
    // route::controller( RelationController::class )->group(function (){
    //     route::get('relation' , 'relation')->name('relation');
    // });
################## end relation route ######################

// routes/web.php
Route::get('/media', [ImageController::class, 'index'])->name('media.index');
Route::get('/media/create', [ImageController::class, 'create'])->name('media.create');
Route::post('/media', [ImageController::class, 'store'])->name('media.store');

// routes/web.php
Route::get('/', [HomeCategoryController::class, 'index'])->name('home.categories.index');

// routes/web.php


// require __DIR__.'/auth.php';
Route::resource('categories', HomeCategoryController::class);


Route::get('/first-component', PostsList::class);
// Route::get('/second-component', ShowPosts::class);
Auth::routes();
Route::get('/email/verify', 'App\Http\Controllers\Auth\VerificationController@show')
    ->middleware('auth')
    ->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', 'App\Http\Controllers\Auth\VerificationController@verify')
    ->middleware(['auth', 'signed', 'throttle:6,1'])
    ->name('verification.verify');

Route::post('/email/resend', 'App\Http\Controllers\Auth\VerificationController@resend')
    ->middleware(['auth', 'throttle:6,1'])
    ->name('verification.resend');


// Route::get('/home2', [App\Http\Controllers\HomeController::class, 'index'])->name('home2');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/login', 'Auth\LoginController@index')->name('login');
// Route::get('/login', [LoginController::class, 'showLoginForm']);
Route::view('/about', 'home/components/pages/policy')->name('about');
Route::view('/policy', 'home/components/pages/policy')->name('policy');
