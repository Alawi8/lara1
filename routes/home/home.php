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
    route::get ( 'P/{title}/' , 'display')->name('display');
});

// Route::get('/search/{title}', [HomeController::class, 'search'])->name('home.search');

// Route::get('/search', [HomeController::class, 'searchByTitle'])->name('search');
// Route::get('search/{title}', function ($title) {
//     // Your search logic goes here using $title
//     dd($title); // Display the value of the 'title' parameter

//     // If you want to access the entire request, you can use the request() helper function
//     dd(request()->all());

//     // Or, if you prefer, you can use the request directly in the function parameters
//     // function ($title, Request $request) {
//     //     dd($request->all());
//     // }
// })->name('home.search');