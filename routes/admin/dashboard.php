<?php
use App\Http\Controllers\admin\AdminPostController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;

// route admin dashboard 
Route::resource('dashboard', AdminPostController::class) -> middleware('auth');

//route admin view
