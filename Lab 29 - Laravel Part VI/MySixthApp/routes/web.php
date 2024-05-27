<?php

use App\Http\Controllers\backend\AdminHomeController;
use App\Http\Controllers\backend\AdminLoginController;
use App\Http\Controllers\frontend\HomeController;
use Illuminate\Support\Facades\Route;

//Frontend
Route::get('/', [HomeController::class, 'index']);


//Backend
Route::get('/admin', [AdminHomeController::class, 'index']);
Route::get('/admin/login', [AdminLoginController::class, 'index']);
