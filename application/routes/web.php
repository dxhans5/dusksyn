<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AppController::class, 'homepage'])->name('homepage');
Route::get('/login', [AppController::class, 'login'])->name('login');
Route::post('/authenticate', [AppController::class, 'authenticate'])->name('authenticate');

Route::middleware(['auth:sanctum'])->group(function () {
    Route::name('admin.')->prefix('admin')->group(function() {
        Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    });
});
