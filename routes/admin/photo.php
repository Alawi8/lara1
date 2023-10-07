<?php

use App\Http\Controllers\admin\PhotoController;
use Illuminate\Support\Facades\Route;


Route::resource('photo', PhotoController::class ) -> middleware('auth');