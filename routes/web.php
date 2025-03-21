<?php
use Illuminate\Support\Facades\Route;
use Spatie\Sitemap\SitemapGenerator;
use App\Http\Controllers\admin\AdminPagesController ;
use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\RelationController;
use App\Http\Controllers\home\HomeController;
use Illuminate\Support\Facades\Auth;
use App\Http\Livewire\PostsList;
use App\Http\Controllers\media\ImageController;
use App\Http\Controllers\home\HomeCategoryController;
use App\Http\Controllers\home\PageController;

/*
|-------------------------------------------------------------------------->
| Web Routes
|-------------------------------------------------------------------------->
*/
Route::get('sitemap/create', function () {
    $baseUrl = config('app.url'); 

    SitemapGenerator::create($baseUrl)->writeToFile('sitemap.xml');
    
    return 'sitemap created';
})->name('sitemap');
/*
|-------------------------------------------------------------------------->
| admin page controllers
|-------------------------------------------------------------------------->
*/

route::controller(AdminPagesController::class)->group(function (){
    route::get("/user/{id}/"      ,       'display') -> name ('user.display') ;
});

// relation test controller
route::controller(RelationController::class)-> group(function(){
    route::get('/relation'  ,       'relation')->name('relation');
});

/*
|-------------------------------------------------------------------------->
|home routes 
|-------------------------------------------------------------------------->
*/

Route::get('/', [HomeController::class, 'index']);

// routes/web.php
Route::get('/media', [ImageController::class, 'index'])->name('media.index');
Route::get('/media/create', [ImageController::class, 'create'])->name('media.create');
Route::post('/media', [ImageController::class, 'store'])->name('media.store');

/*
|-------------------------------------------------------------------------->
| categories routes
|-------------------------------------------------------------------------->
*/
Route::resource('categories', HomeCategoryController::class);

Route::get('/first-component', PostsList::class);

/*
|-------------------------------------------------------------------------->
| authntcation routes
|-------------------------------------------------------------------------->
*/

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


/*
|-------------------------------------------------------------------------->
| home/pageController routes
|-------------------------------------------------------------------------->
*/
Route::get('page/{title}', [PageController::class, 'show'])->name('page.show');

/*
|--------------------------------------------------------------------------
| ROUTES SEARCH
|--------------------------------------------------------------------------
*/
Route::post('/search', [HomeController::class, 'search'])->name('search');
/*
|--------------------------------------------------------------------------
| TEST LAIVEWIRE COMPONENTS
|--------------------------------------------------------------------------
*/

route::get('fetch',[RelationController::class, 'relation']);

//login with google account
Route::get('auth/google', [LoginController::class , 'redirectToGoogle'])->name('auth.google');
Route::get('auth/google/callback', [LoginController::class ,'handleGoogleCallback']);
Route::get('/relation', [RelationController::class , 'relation']);

