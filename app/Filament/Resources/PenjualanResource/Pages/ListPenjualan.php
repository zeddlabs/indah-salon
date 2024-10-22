<?php

namespace App\Filament\Resources\PenjualanResource\Pages;

use App\Filament\Resources\PenjualanResource;
use Filament\Actions;
use Filament\Forms\Components\DatePicker;
use Filament\Resources\Pages\ListRecords;

class ListPenjualan extends ListRecords
{
    protected static string $resource = PenjualanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\Action::make('cetakLaporan')
                ->label('Cetak Laporan')
                ->color('gray')
                ->form([
                    DatePicker::make('tanggal_awal')
                        ->label('Tanggal Awal')
                        ->required()
                        ->default(now()->startOfMonth())
                        ->native(false),
                    DatePicker::make('tanggal_akhir')
                        ->label('Tanggal Akhir')
                        ->required()
                        ->default(now()->endOfMonth())
                        ->native(false),
                ])
                ->action(fn ($data) => redirect()->route('laporan.penjualan', [
                    'tanggal_awal' => $data['tanggal_awal'],
                    'tanggal_akhir' => $data['tanggal_akhir'],
                ]))
                ->modalSubmitActionLabel('Cetak'),
            Actions\CreateAction::make()
                ->label('Transaksi Penjualan'),
            // Cetak Laporan
        ];
    }
}
