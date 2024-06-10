<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\BrandsController;
use App\Http\Controllers\CategoriesController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('products', ProductsController::class);
Route::delete('/products/{product}', [ProductsController::class, 'destroy'])->name('products.delete');

Route::resource('brands', BrandsController::class);
Route::delete('/brands/{brand}', [BrandsController::class, 'destroy'])->name('brands.delete');

Route::resource('categories', CategoriesController::class);
Route::delete('/categories/{category}', [CategoriesController::class, 'destroy'])->name('categories.delete');