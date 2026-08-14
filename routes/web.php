<?php

use App\Https\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/products/create',[ProductController::class,'create'])->name('/proudcts.create');