<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReviewsController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/reviews', ReviewsController::class);
