<?php

namespace App\Http\Controllers;

use App\Models\MetodePembayaran;
use App\Models\Penjualan;
use App\Models\Produk;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProdukController extends Controller
{
    public function create(Produk $produk)
    {
        return view('produk.order', [
            'title' => 'Beli Produk',
            'product' => $produk,
            'metodePembayaran' => MetodePembayaran::all(),
        ]);
    }

    public function order(Request $request, Produk $produk)
    {
        $request->validate([
            'tanggal_pesanan' => 'required|date',
            'jumlah_produk' => 'required|numeric|min:1',
        ], [
            'tanggal_pesanan.required' => 'Tanggal pesanan wajib diisi.',
            'tanggal_pesanan.date' => 'Tanggal pesanan tidak valid.',
            'jumlah_produk.required' => 'Jumlah produk wajib diisi.',
            'jumlah_produk.numeric' => 'Jumlah produk harus berupa angka.',
            'jumlah_produk.min' => 'Jumlah produk minimal 1.',
        ]);

        $pelanggan = Auth::guard('pelanggan')->user();

        $invoice = 'INV' . date('YmdHis');

        $total_biaya = $produk->harga * $request->jumlah_produk;

        $penjualan = Penjualan::create([
            'id_pelanggan' => $pelanggan->id,
            'id_produk' => $produk->id,
            'invoice' => $invoice,
            'tanggal_pesanan' => $request->tanggal_pesanan,
            'jumlah_produk' => $request->jumlah_produk,
            'total_biaya' => $total_biaya,
            'id_metode_pembayaran' => $request->id_metode_pembayaran,
            'status_pesanan' => 'Menunggu Pembayaran',
            'status_pembayaran' => 'Belum Dibayar',
        ]);

        return redirect()->route('produk.invoice', $penjualan->invoice);
    }

    public function invoice(Penjualan $penjualan)
    {
        return view('produk.invoice', [
            'title' => 'Invoice Produk',
            'penjualan' => $penjualan,
        ]);
    }

    public function uploadPayment(Request $request, Penjualan $penjualan)
    {
        $request->validate([
            'bukti_pembayaran' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ], [
            'bukti_pembayaran.required' => 'Bukti pembayaran wajib diunggah.',
            'bukti_pembayaran.image' => 'Bukti pembayaran harus berupa gambar.',
            'bukti_pembayaran.mimes' => 'Format bukti pembayaran harus jpg, jpeg, atau png.',
            'bukti_pembayaran.max' => 'Ukuran bukti pembayaran maksimal 2MB.',
        ]);

        $image = $request->file('bukti_pembayaran')->store('bukti_pembayaran');

        $penjualan->update([
            'bukti_pembayaran' => $image,
        ]);

        return redirect()->route('produk.invoice', $penjualan->invoice)->with('success', 'Bukti pembayaran berhasil diunggah. Silahkan cetak invoice dan tunggu konfirmasi dari admin.');
    }

    public function printInvoice(Penjualan $penjualan)
    {
        $pdf = Pdf::loadView('produk.invoice-print', [
            'title' => 'Invoice Produk',
            'penjualan' => $penjualan,
        ])->setOptions(['defaultFont' => 'Arial']);

        return $pdf->download('invoice-' . $penjualan->invoice . '.pdf');
    }
}
