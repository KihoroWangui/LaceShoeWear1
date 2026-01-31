<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home;

Route::get('/', [Home::class, 'index'])->name('home');
Route::get('/category/{id}', [category::class, 'show'])->name('category.show');
Route::get('/products/{id}', [products::class, 'show'])->name('product.show');
Route::get('/orders/{id}',[orders::class, 'show'])->name('orders.show');
