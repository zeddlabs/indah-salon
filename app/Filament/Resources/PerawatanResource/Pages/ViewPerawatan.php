<?php

namespace App\Filament\Resources\PerawatanResource\Pages;

use App\Filament\Resources\PerawatanResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewPerawatan extends ViewRecord
{
    protected static string $resource = PerawatanResource::class;

    protected static ?string $breadcrumb = 'Detail';
    protected static ?string $title = 'Detail Perawatan';

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
