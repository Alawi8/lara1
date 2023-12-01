<?php

use App\Http\Controllers\home\SettingsController;
use Illuminate\Support\Facades\Route;


Route::resource('settings', SettingsController::class)->middleware('auth');
