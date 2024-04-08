<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource("/vehicles", \App\Http\Controllers\VehicleController::class);
