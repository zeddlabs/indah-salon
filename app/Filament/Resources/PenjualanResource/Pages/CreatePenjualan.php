<?php

namespace App\Filament\Resources\PenjualanResource\Pages;

use App\Filament\Resources\PenjualanResource;
use Filament\Actions;
use Filament\Actions\Action;
use Filament\Resources\Pages\CreateRecord;

class CreatePenjualan extends CreateRecord
{
    protected static string $resource = PenjualanResource::class;

    protected static ?string $breadcrumb = 'Transaksi';
    protected static ?string $title = 'Transaksi Penjualan';
    protected static bool $canCreateAnother = false;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function getCreateFormAction(): Action
    {
        return Action::make('create')
            ->label('Simpan')
            ->submit('create')
            ->keyBindings(['mod+s']);
    }

    protected function afterCreate()
    {
        // kurangi stok produk
        $produk = $this->record->produk;
        $produk->stok -= $this->record->jumlah_produk;
        $produk->save();
    }
}
