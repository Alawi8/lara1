<?php

use App\Http\Controllers\home\HomeCategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\home\HomeController;




/*
|--------------------------------------------------------------------------
| home controller Routes
|--------------------------------------------------------------------------
*/
route::controller(HomeController::class)-> group(function(){
    route::get ( '/' , 'index')->name('home');
    route::get ( 'posts/{title}' , 'display')->name('display');
});


use App\Http\Controllers\home\CommetController;

Route::post('/comments/store/', [CommetController::class, 'store'])->name('comments.store');
