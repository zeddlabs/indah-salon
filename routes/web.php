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

Route::get('/produk/{produk}/order', [Controllers\ProdukController::class, 'create'])->name('produk.create');
Route::post('/produk/{produk}/order', [Controllers\ProdukController::class, 'order'])->name('produk.order');
Route::get('/produk/{penjualan:invoice}/invoice', [Controllers\ProdukController::class, 'invoice'])->name('produk.invoice');
Route::get('/produk/{penjualan:invoice}/invoice/print', [Controllers\ProdukController::class, 'printInvoice'])->name('produk.invoice.print');
Route::post('/produk/{penjualan:invoice}/invoice/upload', [Controllers\ProdukController::class, 'uploadPayment'])->name('produk.invoice.upload');
