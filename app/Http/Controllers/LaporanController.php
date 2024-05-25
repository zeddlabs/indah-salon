<?php

namespace App\Http\Controllers;

use App\Models\Penjualan;
use App\Models\Perawatan;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function cetakPenjualan(Request $request)
    {
        $tanggal_awal = $request->tanggal_awal;
        $tanggal_akhir = $request->tanggal_akhir;

        // logic untuk mencetak laporan
        $penjualan = Penjualan::whereBetween('created_at', [$tanggal_awal, $tanggal_akhir])->get();

        $pdf = Pdf::loadView('laporan.penjualan', [
            'title' => 'Laporan Penjualan',
            'penjualan' => $penjualan,
            'tanggal_awal' => $tanggal_awal,
            'tanggal_akhir' => $tanggal_akhir,
        ])->setPaper('a3', 'landscape');

        return $pdf->download('Laporan Penjualan.pdf');
    }

    public function cetakPerawatan(Request $request)
    {
        $tanggal_awal = $request->tanggal_awal;
        $tanggal_akhir = $request->tanggal_akhir;

        // logic untuk mencetak laporan
        $perawatan = Perawatan::whereBetween('tanggal_perawatan', [$tanggal_awal, $tanggal_akhir])->get();

        $pdf = Pdf::loadView('laporan.perawatan', [
            'title' => 'Laporan Perawatan',
            'perawatan' => $perawatan,
            'tanggal_awal' => $tanggal_awal,
            'tanggal_akhir' => $tanggal_akhir,
        ])->setPaper('a4', 'landscape');

        return $pdf->download('Laporan Perawatan.pdf');
    }
}
