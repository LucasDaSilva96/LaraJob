<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

Route::get('/', [JobController::class, 'index'])->name('jobs.index');

// ---------------------------- Register Job  ----------------------------
Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');

Route::post('/register', [RegisteredUserController::class, 'store'])->name('register.store');

// ---------------------------- Auth  ----------------------------

// Middleware for NOT-authenticated users
Route::middleware('guest')->group(function(){

    Route::get('/login', [SessionController::class, 'create'])->name('login');

    Route::get('/store', [SessionController::class,'store'])->name('store');

    Route::post('/login', [SessionController::class, 'login'])->name('login.store');

    Route::post('/register', [SessionController::class, 'register'])->name('register');
});



Route::post('/logout', [SessionController::class, 'destroy'])->name('logout')->middleware('auth');