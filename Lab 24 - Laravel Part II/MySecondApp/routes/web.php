<?php

use App\Http\Controllers\frontend\AboutController;
use App\Http\Controllers\frontend\ContactController;
use App\Http\Controllers\frontend\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('/about-us', [AboutController::class, 'index']);
Route::get('/contact-us', [ContactController::class, 'index']);

