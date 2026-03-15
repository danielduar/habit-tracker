<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

Route::get('/', [SiteController::class, 'index'])->name('site.index');
//Route::get('/daniel', [SiteController::class, 'portifolio'])->name('daniel');

/**
 * Login routes
 */
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login.authenticate');
//Auth
Route::middleware(['auth'])->group(function () {

    Route::get('/dashboard', [SiteController::class, 'dashboard'])->name('dashboard.index');
    Route::post('/logout', [LoginController::class, 'logout'])->name('login.logout');
});

