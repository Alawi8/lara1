<?php
use App\Http\Controllers\Admin\AdminPostController;
use App\Http\Controllers\Admin\AdminPagesController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;

// route admin dashboard 
// Route::group(['Middleware'=>['checkRole']], function(){

    Route::resource('posts', AdminPostController::class) -> middleware(['auth','checkRole']);

    Route::resource('pages', AdminPagesController::class) ;

    Route::delete('/pages/{$id}', 'AdminPagesController@destroy')->name('pages.destroy');
