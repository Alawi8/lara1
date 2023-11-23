<?php
use App\Http\Controllers\admin\AdminPostController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;

// route admin dashboard 
Route::group(['Middleware'=>['auth','checkRole']], function(){

    Route::resource('posts', AdminPostController::class) -> middleware(['auth','checkRole']);
});

