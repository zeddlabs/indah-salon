<?php

namespace App\Filament\Resources\JabatanResource\Pages;

use App\Filament\Resources\JabatanResource;
use Filament\Actions;
use Filament\Actions\Action;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Js;

class CreateJabatan extends CreateRecord
{
    protected static string $resource = JabatanResource::class;

    public static ?string $title = 'Jabatan Baru';
    public static ?string $breadcrumb = 'Tambah';

    public static function canCreateAnother(): bool
    {
        return false;
    }

    protected function getCreateFormAction(): Action
    {
        return Action::make('create')
            ->label('Simpan')
            ->submit('create')
            ->keyBindings(['mod+s']);
    }

    protected function getCancelFormAction(): Action
    {
        return Action::make('cancel')
            ->label('Batal')
            ->color('gray');
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function getCreatedNotificationTitle(): ?string
    {
        return 'Jabatan berhasil ditambahkan';
    }
}
