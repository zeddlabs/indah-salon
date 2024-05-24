<?php

namespace App\Http\Controllers;

use App\Models\Layanan;
use App\Models\Perawatan;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LayananController extends Controller
{
    public function create(Layanan $layanan)
    {
        return view('layanan.order', [
            'title' => 'Pesan Layanan',
            'service' => $layanan,
        ]);
    }

    public function order(Request $request, Layanan $layanan)
    {
        $request->validate([
            'tanggal_perawatan' => 'required|date',
            'jam_perawatan' => 'required',
            'catatan' => 'nullable',
        ], [
            'tanggal_perawatan.required' => 'Tanggal perawatan wajib diisi.',
            'tanggal_perawatan.date' => 'Tanggal perawatan tidak valid.',
            'jam_perawatan.required' => 'Jam perawatan wajib diisi.',
        ]);

        $pelanggan = Auth::guard('pelanggan')->user();

        $invoice = 'INV' . date('YmdHis');

        $perawatan = Perawatan::create([
            'id_pelanggan' => $pelanggan->id,
            'id_layanan' => $layanan->id,
            'invoice' => $invoice,
            'tanggal_perawatan' => $request->tanggal_perawatan,
            'jam_perawatan' => $request->jam_perawatan,
            'catatan' => $request->catatan,
            'biaya_perawatan' => $layanan->harga,
        ]);

        return redirect()->route('layanan.invoice', $perawatan->invoice);
    }

    public function invoice(Perawatan $perawatan)
    {
        return view('layanan.invoice', [
            'title' => 'Invoice Layanan',
            'perawatan' => $perawatan,
        ]);
    }

    public function printInvoice(Perawatan $perawatan)
    {
        $pdf = Pdf::loadView('layanan.invoice-print', [
            'title' => 'Invoice Layanan',
            'perawatan' => $perawatan,
        ])->setOptions(['defaultFont' => 'Arial']);

        return $pdf->download('invoice-' . $perawatan->invoice . '.pdf');
    }
}
