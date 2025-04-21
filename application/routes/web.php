<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AppController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;

use Illuminate\Support\Facades\Route;

Route::get('/', [AppController::class, 'homepage'])->name('homepage');
Route::get('/login', [AppController::class, 'login'])->name('login');
Route::post('/authenticate', [AppController::class, 'authenticate'])->name('authenticate');

Route::middleware(['auth:sanctum'])->group(function () {
    Route::name('admin.')->prefix('admin')->group(function() {
        Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

        Route::name('products.')->prefix('products')->group(function() {
            Route::get('/dashboard', [ProductController::class, 'dashboard'])->name('dashboard');
            Route::get('/create', [ProductController::class, 'create'])->name('create');
            Route::get('/edit/{id}', [ProductController::class, 'edit'])->name('edit');
            Route::post('/add', [ProductController::class, 'add'])->name('add');
            Route::post('/update/{id}', [ProductController::class, 'update'])->name('update');
            Route::delete('/delete/{id}', [ProductController::class, 'delete'])->name('delete');
        });

        Route::name('categories.')->prefix('categories')->group(function() {
            Route::get('/dashboard', [CategoryController::class, 'dashboard'])->name('dashboard');
            Route::get('/create', [CategoryController::class, 'create'])->name('create');
            Route::get('/edit/{id}', [CategoryController::class, 'edit'])->name('edit');
            Route::post('/add', [CategoryController::class, 'add'])->name('add');
            Route::post('/update/{id}', [CategoryController::class, 'update'])->name('update');
            Route::delete('/delete/{id}', [CategoryController::class, 'delete'])->name('delete');
        });

        Route::name('users.')->prefix('users')->group(function() {
            Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard');
            Route::get('/create', [UserController::class, 'create'])->name('create');
            Route::get('/edit/{id}', [UserController::class, 'edit'])->name('edit');
            Route::post('/add', [UserController::class, 'add'])->name('add');
            Route::post('/update/{id}', [UserController::class, 'update'])->name('update');
            Route::delete('/delete/{id}', [UserController::class, 'delete'])->name('delete');
        });
    });
});
