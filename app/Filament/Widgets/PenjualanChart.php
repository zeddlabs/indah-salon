<?php

namespace App\Filament\Widgets;

use App\Models\Penjualan;
use Carbon\Carbon;
use Filament\Widgets\ChartWidget;

class PenjualanChart extends ChartWidget
{
    protected static ?string $heading = 'Penjualan Per Bulan';

    protected function getData(): array
    {
        $data = $this->getPenjualanPerBulan();

        return [
            'datasets' => [
                [
                    'label' => Carbon::now()->year,
                    'data' => $data['penjualan'],
                ],
            ],
            'labels' => $data['bulan'],
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }

    private function getPenjualanPerBulan()
    {
        Carbon::setLocale('id');
        $now = Carbon::now();

        $penjualanPerBulan = [];
        $months = collect(range(1, 12))->map(function ($month) use ($now, &$penjualanPerBulan) {
            $count = Penjualan::whereMonth('tanggal_pesanan', Carbon::parse($now->month($month)->format('Y-m')))->count();
            $penjualanPerBulan[] = $count;

            return $now->month($month)->translatedFormat('M');
        })->toArray();

        return [
            'penjualan' => $penjualanPerBulan,
            'bulan' => $months,
        ];
    }
}
