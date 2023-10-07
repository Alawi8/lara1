<?php

use App\Http\Controllers\admin\SettingsController;
use Illuminate\Support\Facades\Route;


Route::resource('settings', SettingsController::class ) -> middleware('auth');