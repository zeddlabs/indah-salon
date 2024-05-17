<?php

namespace App\Filament\Resources\JabatanResource\Pages;

use App\Filament\Resources\JabatanResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListJabatan extends ListRecords
{
    protected static string $resource = JabatanResource::class;

    public static ?string $title = 'Jabatan';

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->label('Tambah Jabatan'),
        ];
    }
}
