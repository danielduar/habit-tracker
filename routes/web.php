<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HabitController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

Route::get('/', [SiteController::class, 'index'])->name('site.index');
//Route::get('/daniel', [SiteController::class, 'portifolio'])->name('daniel');

/**
 * Login routes
 */
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login.authenticate');

Route::get('/cadastro', [RegisterController::class, 'index'])->name('register.index');
Route::post('/cadastro', [RegisterController::class, 'store'])->name('register.store');
//Auth

Route::middleware(['auth'])->group(function () {

//    Route::get('/dashboard/habitos', [SiteController::class, 'dashboard'])->name('habits.index');
    Route::post('/logout', [LoginController::class, 'logout'])->name('login.logout');

    //Habits

//    Route::get('/dashboard/habitos/cadastro', [HabitController::class, 'create'])->name('habits.create');
//    Route::post('/dashboard/habitos/cadastro', [HabitController::class, 'store'])->name('habits.store');
//    Route::delete('/dashboard/habitos/{habit}', [HabitController::class, 'destroy'])->name('habits.destroy');
//    Route::get('/dashboard/habitos/{habit}/editar', [HabitController::class, 'edit'])->name('habits.edit');
//    Route::put('/dashboard/habitos/{habit}/editar', [HabitController::class, 'update'])->name('habits.update');
    Route::resource('dashboard/habits', HabitController::class);
});



