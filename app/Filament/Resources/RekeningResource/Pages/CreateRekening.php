<?php

namespace App\Filament\Resources\RekeningResource\Pages;

use App\Filament\Resources\RekeningResource;
use Filament\Actions\Action;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Js;

class CreateRekening extends CreateRecord
{
    protected static string $resource = RekeningResource::class;

    protected static ?string $breadcrumb = 'Tambah';
    protected static ?string $title = 'Tambah Rekening';
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
