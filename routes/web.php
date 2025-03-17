<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FrontController;

Route::get('admin', function () {
    return view('layouts.admin');
});


// Route::prefix('admin/products')->name('admin.products.')->group(function () {
//     Route::get('/', [ProductController::class, 'index'])->name('index');
//     Route::get('/create', [ProductController::class, 'create'])->name('create');
//     Route::post('/store', [ProductController::class, 'store'])->name('store');
//     Route::get('/edit/{id}', [ProductController::class, 'edit'])->name('edit');
//     Route::patch('/update/{id}', [ProductController::class, 'update'])->name('update');
//     Route::delete('/delete/{id}', [ProductController::class, 'destroy'])->name('delete');
// });

#Dashbord Routes
Route::get('admin/products', [ProductController::class, 'index'])->name('admin.products.index');
Route::get('admin/products/create', [ProductController::class, 'create'])->name('admin.products.create');
Route::post('admin/products/store', [ProductController::class, 'store'])->name('admin.products.store');
Route::get('admin/products/edit/{id}', [ProductController::class, 'edit'])->name('admin.products.edit');
Route::delete('admin/products/delete/{id}', [ProductController::class, 'destroy'])->name('admin.products.delete');
Route::patch('admin/products/update/{id}', [ProductController::class, 'update'])->name('admin.products.update');


Route::get('admin/categories', [CategoryController::class, 'index'])->name('admin.categories.index');
Route::get('admin/categories/create', [CategoryController::class, 'create'])->name('admin.categories.create');
Route::post('admin/categories/store', [CategoryController::class, 'store'])->name('admin.categories.store');
Route::get('admin/categories/edit/{id}', [CategoryController::class, 'edit'])->name('admin.categories.edit');
Route::patch('admin/categories/update/{id}', [CategoryController::class, 'update'])->name('admin.categories.update');
Route::delete('admin/categories/delete/{id}', [CategoryController::class, 'destroy'])->name('admin.categories.delete');



#front page routes

Route::get('/', [FrontController::class , 'index']);
