<?php

namespace App\Filament\Resources\MetodePembayaranResource\Pages;

use App\Filament\Resources\MetodePembayaranResource;
use Filament\Actions;
use Filament\Actions\Action;
use Filament\Resources\Pages\CreateRecord;

class CreateMetodePembayaran extends CreateRecord
{
    protected static string $resource = MetodePembayaranResource::class;

    protected static ?string $breadcrumb = 'Tambah';
    protected static ?string $title = 'Tambah Metode Pembayaran';
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
