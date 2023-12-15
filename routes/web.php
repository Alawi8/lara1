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
Route::get('sitemap/create', function () {
    $baseUrl = config('app.url'); // استخدم متغير البيئة للحصول على عنوان موقعك

    SitemapGenerator::create($baseUrl)->writeToFile('sitemap.xml');
    
    return 'sitemap created';
});
/*
|--------------------------------------------------------------------------
| home Routes
|--------------------------------------------------------------------------
*/


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

// require __DIR__.'/auth.php';
Route::resource('categories', HomeCategoryController::class);


// Route::livewire('livewire/posts/{id}', 'show_posts');
Route::get('/show-posts/{id}', App\Http\Livewire\ShowPosts::class);
