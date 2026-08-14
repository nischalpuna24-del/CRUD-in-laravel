<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/products/create', [ProductController::class, 'create'])->name('//proudcts.create');
Route::post('/products', [ProductController::class, 'store'])->name('//proudcts.store');
