<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LoginController::class, 'index']);
Route::post('/login_proses', [LoginController::class, 'login_proses']);
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register_proses', [RegisterController::class, 'register_proses']);

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

Route::resource('/products', ProductController::class)->middleware('auth');

Route::post('/logout', [LoginController::class, 'logout'])->middleware('auth');
