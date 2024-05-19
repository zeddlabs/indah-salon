<?php

namespace App\Filament\Resources\PelangganResource\Pages;

use App\Filament\Resources\PelangganResource;
use Filament\Actions;
use Filament\Actions\Action;
use Filament\Resources\Pages\CreateRecord;

class CreatePelanggan extends CreateRecord
{
    protected static string $resource = PelangganResource::class;

    protected static ?string $breadcrumb = 'Tambah';
    protected static ?string $title = 'Tambah Pelanggan';
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
