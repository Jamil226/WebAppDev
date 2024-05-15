<?php

use App\Http\Controllers\frontend\AboutController;
use App\Http\Controllers\frontend\ContactController;
use App\Http\Controllers\frontend\HomeController;
use Illuminate\Support\Facades\Route;

# Frontend
Route::get('/', [HomeController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index']);
Route::post('/about', [AboutController::class, 'submitMessage']);
Route::get('/about', [AboutController::class, 'index']);

#Backend
