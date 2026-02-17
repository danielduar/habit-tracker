<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

Route::get('/', [SiteController::class, 'index'])->name('site.index');
Route::get('/daniel', [SiteController::class, 'me'])->name('site.me');

/**
 * Login routes
 */
Route::get('/login', [LoginController::class, 'index'])->name('login.index');
