<?php

namespace App\Http\Controllers;

use App\Models\Layanan;
use App\Models\Produk;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $services = Layanan::all();
        $products = Produk::all();

        return view('home', [
            'title' => 'Beranda',
            'services' => $services,
            'products' => $products,
        ]);
    }
}
