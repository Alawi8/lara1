<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\auth\CustomAuthController;


Route::controller(CustomAuthController::class)-> group(function(){

    // login  users
    route::get ('login','index')                                 ->  name    ('login');
    route::post ('custom-login','customLogin')                   ->  name    ('login.custom');

    // register users
    route::get ('registration','registration')                   ->  name    ('register-user');
    route::post ('custom-registration','customRegistration')     ->  name    ('register.custom');
    route::get ('signout','signOut')                             ->  name    ('signout');
    route::get ('admin/users','show')                             ->  name    ('users.show');
});