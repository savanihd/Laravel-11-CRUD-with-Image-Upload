<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;

Route::resource('products', ProductController::class);

Route::get('/', function () {
    return view('welcome');
});
