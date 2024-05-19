<?php

namespace App\Filament\Resources\ProdukResource\Pages;

use App\Filament\Resources\ProdukResource;
use Filament\Actions;
use Filament\Actions\Action;
use Filament\Resources\Pages\CreateRecord;

class CreateProduk extends CreateRecord
{
    protected static string $resource = ProdukResource::class;

    protected static ?string $breadcrumb = 'Tambah';
    protected static ?string $title = 'Tambah Produk';
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
}
