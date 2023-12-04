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

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|




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


// Route::controller(MediaController::class)->group(function(){
//     route::get(      '/dash/media'        ,          'GetMedia'        ) -> name    ('dash.media')  ->      middleware('auth');
// });

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

// Route::resource('posts', PostController::class)->middleware('auth');

################## begin relation route ######################
    route::controller( RelationController::class )->group(function (){
        route::get('relation' , 'relation')->name('relation');
    });
################## end relation route ######################





// routes/web.php

use App\Http\Controllers\media\ImageController;

Route::get('/media', [ImageController::class, 'index'])->name('media.index');
Route::get('/media/create', [ImageController::class, 'create'])->name('media.create');
Route::post('/media', [ImageController::class, 'store'])->name('media.store');

// routes/web.php

use App\Http\Controllers\home\HomeCategoryController;

Route::get('/', [HomeCategoryController::class, 'index'])->name('home.categories.index');

// routes/web.php

use App\Http\Controllers\auth\LoginController;

// Route::get('login/google', [LoginController::class, 'redirectToGoogle']);
// Route::get('login/google/callback', [LoginController::class, 'handleGoogleCallback']);


// Route::get('login/{driver}', [LoginController::class , 'redirectToProvider'] )->name('social.oauth');
// Route::get('login/{driver}/callback',[LoginController::class , 'handleProviderCallback'] )->name('social.callback');





// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// require __DIR__.'/auth.php';
Route::resource('categories', HomeCategoryController::class);