<?php

namespace App\Filament\Resources\PenjualanResource\Pages;

use App\Filament\Resources\PenjualanResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewPenjualan extends ViewRecord
{
    protected static string $resource = PenjualanResource::class;

    protected static ?string $breadcrumb = 'Detail';
    protected static ?string $title = 'Detail Penjualan';

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
