<?php

use App\Http\Controllers;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/login', [Controllers\LoginController::class, 'index'])->name('login.index');
Route::post('/login', [Controllers\LoginController::class, 'authenticate'])->name('login.authenticate');

Route::get('/register', [Controllers\RegisterController::class, 'index'])->name('register.index');
Route::post('/register', [Controllers\RegisterController::class, 'store'])->name('register.store');

Route::get('/logout', Controllers\LogoutController::class)->name('logout');
