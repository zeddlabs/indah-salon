<?php

namespace App\Filament\Widgets;

use App\Models\Layanan;
use App\Models\Pelanggan;
use App\Models\Produk;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Jumlah Layanan', Layanan::count()),
            Stat::make('Total Produk', Produk::count()),
            Stat::make('Total Pelanggan', Pelanggan::count()),
        ];
    }
}
