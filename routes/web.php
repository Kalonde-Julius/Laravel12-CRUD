<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
   // return view('welcome');
//});

 Route::get('/', [ProductController::class, 'index'])->name('products.index');

// Route::get('products/create', [ProductController::class, 'create'])->name('products.create');

// Route::post('products/', [ProductController::class, 'store'])->name('products.store');

// Route::get('products/{id}', [ProductController::class, 'show'])->name('products.show');

// Route::get('products/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');

// Route::put('products/{id}', [ProductController::class, 'update'])->name('products.update');

// Route::delete('products/{id}', [ProductController::class, 'destroy'])->name('products.destroy');

Route::resource('/products', ProductController::class);
