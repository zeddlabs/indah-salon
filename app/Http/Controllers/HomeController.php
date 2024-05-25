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

    public function sendMessage(Request $request)
    {
        $templatePesan = 'Halo, saya ingin menanyakan tentang produk Anda.' . PHP_EOL . PHP_EOL . 'Nama: ' . $request->nama_pelanggan . PHP_EOL . 'No. Handphone: ' . $request->no_telp . PHP_EOL . 'Pesan: ' . $request->pesan;

        return redirect('https://wa.me/6285936574870?text=' . urlencode($templatePesan));
    }
}
