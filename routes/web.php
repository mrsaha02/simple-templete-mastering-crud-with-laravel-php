<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class,'home'])->name('/');
Route::get('/product-details/{id}', [HomeController::class,'details'])->name('product-details');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'home'])->name('dashboard');
    Route::get('/add-product', [ProductController::class, 'addProduct'])->name('add-product');
    Route::get('/manage-product', [ProductController::class, 'manage'])->name('manage-product');
    Route::post('/new-product', [ProductController::class, 'newProduct'])->name('new-product');
    Route::get('/delete-product/{id}', [ProductController::class, 'deleteProduct'])->name('delete-product');
    Route::get('/edit-product/{id}', [ProductController::class, 'editProduct'])->name('edit-product');
    Route::post('/update-product/{id}', [ProductController::class, 'updateProduct'])->name('update-product');
});
