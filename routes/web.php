<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\postsController;
// use App\Http\Controllers\AdminController;
use Illuminate\Http\Request ;
use PHPUnit\TextUI\XmlConfiguration\Group;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

route::controller(postsController::class )-> group(function(){
    route::get ( '/' , 'show')->name('home');
    route::get ( '/posts' , 'show')->name('posts');
    route::get ( 'posts/display/{id}' , 'display')->name('display');
});

 
use App\Http\Controllers\CustomAuthController;
/*
|--------------------------------------------------------------------------
| Web Routes Auth
|--------------------------------------------------------------------------
*/
 
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom'); 
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom'); 
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');

/*
|--------------------------------------------------------------------------
| home Routes
|--------------------------------------------------------------------------
*/
route::get('privce-policy', function(){
    return view ('home.pages.policy');
})-> name('policy');

route::get('about', function(){
    return view ('home.pages.about');
})-> name('about');

Route::get('faq/', function () {
    return view ('home.pages.faq');
    
})-> name('faq');

/*
|--------------------------------------------------------------------------
| admin Routes
|--------------------------------------------------------------------------
*/
Route::get('/profile/dashboard', function () {
    return view ('admin.sb.addons.pages.dashboard');
})->middleware('auth')-> name('dashboard');

Route::get('/profile/charts', function () {
    return view ('admin.sb.addons.pages.charts');
})->middleware('auth')-> name('charts');

Route::get('/profile/tables', function () {
    return view ('admin.sb.addons.pages.tables');
})->middleware('auth')-> name('tables');

// Route::get('/profile/index', function () {
//     return view ('admin.sb.addons.pages.posts.index');
// })->middleware('auth')-> name('index');

Route::get('/profile/animation', function () {
    return view ('admin.sb.addons.pages.animation');
})->middleware('auth')-> name('animation');

Route::get('/profile/cards', function () {
    return view ('admin.sb.components.cards');
})->middleware('auth')-> name('cards');

Route::get('/profile/button', function () {
    return view ('admin.sb.components.button');
})->middleware('auth')-> name('button');

Route::get('/profile/create', function () {
    return view ('admin.sb.addons.posts.create');
})->middleware('auth')-> name('create');

Route::get('/profile/colors', function () {
    return view ('admin.sb.addons.pages.colors');
})->middleware('auth')-> name('colors');

Route::get('/profile/border', function () {
    return view ('admin.sb.addons.pages.border');
})->middleware('auth')-> name('border');

Route::get('/profile/other', function () {
    return view ('admin.sb.addons.pages.other');
})->middleware('auth')-> name('other');

Route::get('/profile/edit', function () {
    return view ('admin.sb.addons.posts.edit');
})->middleware('auth')-> name('edit');

Route::get('/profile/index1', function () {
    return view ('profile.index');
})->middleware('auth')-> name('index1');


Route::get('/profile/option', function () {
    return view ('admin.sb.options.option');
})->middleware('auth')-> name('options');


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
//     route::post('admin/add/{id}', 'add')->name('admin.add');

    /*
    |--------------------------------------------------------------------------
    |  post type get
    |--------------------------------------------------------------------------
    */
    route::get('profile/index', 'index')->name('index');
//    route::get('posts/create', 'create')->name('posts.create');
//     route::get('admin/edit/{id}', 'edit')->name('admin.edit');
//     route::get('admin/update/{id}', 'update')->name('admin.update');
//     route::get('admin/destroy/{id}', 'destroy')->name('admin.destroy');
//     route::get('admin/destroyAll/', 'destroy_all')->name('admin.destroyAll');
    

 });

//   Route::Controller(AdminController::class)->group(function(){
//     route::get('admin/addons/options','options')->name('options');
//   });