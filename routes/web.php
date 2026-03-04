<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;

Route::get('/products', [ProductController::class, 'list']);
Route::get('/bang-cuu-chuong/{n}', [HomeController::class, 'multiplication']);
Route::get('/', [HomeController::class, 'index']);