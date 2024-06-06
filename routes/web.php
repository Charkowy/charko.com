<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\BrandsController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('products', ProductsController::class);
Route::delete('/products/{product}', [ProductsController::class, 'destroy'])->name('products.delete');

Route::resource('brands', BrandsController::class);
Route::delete('/brands/{brand}', [BrandsController::class, 'destroy'])->name('brands.delete');