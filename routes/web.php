<?php

use App\Http\Controllers;
use Illuminate\Support\Facades\Route;

Route::get('/', [Controllers\HomeController::class, 'index'])->name('home');

Route::get('/login', [Controllers\LoginController::class, 'index'])->name('login.index');
Route::post('/login', [Controllers\LoginController::class, 'authenticate'])->name('login.authenticate');

Route::get('/register', [Controllers\RegisterController::class, 'index'])->name('register.index');
Route::post('/register', [Controllers\RegisterController::class, 'store'])->name('register.store');

Route::get('/logout', Controllers\LogoutController::class)->name('logout');

Route::get('/layanan/{layanan}/order', [Controllers\LayananController::class, 'create'])->name('layanan.create');
Route::post('/layanan/{layanan}/order', [Controllers\LayananController::class, 'order'])->name('layanan.order');
Route::get('/layanan/{perawatan:invoice}/invoice', [Controllers\LayananController::class, 'invoice'])->name('layanan.invoice');
Route::get('/layanan/{perawatan:invoice}/invoice/print', [Controllers\LayananController::class, 'printInvoice'])->name('layanan.invoice.print');
