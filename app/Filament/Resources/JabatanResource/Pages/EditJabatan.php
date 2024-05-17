<?php

namespace App\Filament\Resources\JabatanResource\Pages;

use App\Filament\Resources\JabatanResource;
use Filament\Actions;
use Filament\Actions\Action;
use Filament\Resources\Pages\EditRecord;

class EditJabatan extends EditRecord
{
    protected static string $resource = JabatanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make()
                ->label('Hapus'),
        ];
    }

    protected function getSaveFormAction(): Action
    {
        return Action::make('save')
            ->label('Update')
            ->submit('save')
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

    protected function getSavedNotificationTitle(): ?string
    {
        return 'Jabatan berhasil di-update';
    }
}
