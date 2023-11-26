<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\home\HomeController;




/*
|--------------------------------------------------------------------------
| home controller Routes
|--------------------------------------------------------------------------
*/
route::controller(HomeController::class)-> group(function(){
    route::get ( '/' , 'index')->name('home');
    route::get ( '/posts/{title}/' , 'display')->name('display');
});

//display blade about page 
route::view('/about','home.pages.about')->name('about');

//display blade policy page
route::view('/policy','home.pages.policy')->name('policy');

//display blade faq page 
route::view('/faq','home.pages.faq')->name('faq');