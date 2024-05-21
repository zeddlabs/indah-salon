<?php

use App\Http\Controllers;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/login', [Controllers\LoginController::class, 'index'])->name('login.index');
Route::get('/register', [Controllers\RegisterController::class, 'index'])->name('register.index');
