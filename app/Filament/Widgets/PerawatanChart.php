<?php

namespace App\Filament\Widgets;

use App\Models\Perawatan;
use Carbon\Carbon;
use Filament\Widgets\ChartWidget;

class PerawatanChart extends ChartWidget
{
    protected static ?string $heading = 'Perawatan Per Bulan';

    protected function getData(): array
    {
        $data = $this->getPerawatanPerBulan();

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

    private function getPerawatanPerBulan()
    {
        Carbon::setLocale('id');
        $now = Carbon::now();

        $perawatanPerBulan = [];
        $months = collect(range(1, 12))->map(function ($month) use ($now, &$perawatanPerBulan) {
            $count = Perawatan::whereMonth('tanggal_perawatan', Carbon::parse($now->month($month)->format('Y-m')))->count();
            $perawatanPerBulan[] = $count;

            return $now->month($month)->translatedFormat('M');
        })->toArray();

        return [
            'penjualan' => $perawatanPerBulan,
            'bulan' => $months,
        ];
    }
}
