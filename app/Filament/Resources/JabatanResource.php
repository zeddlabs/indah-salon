<?php

namespace App\Filament\Resources;

use App\Filament\Resources\JabatanResource\Pages;
use App\Filament\Resources\JabatanResource\RelationManagers;
use App\Models\Jabatan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class JabatanResource extends Resource
{
    protected static ?string $model = Jabatan::class;
    protected static ?string $navigationIcon = 'heroicon-o-user';
    protected static ?string $navigationLabel = 'Jabatan';
    protected static ?string $pluralLabel = 'Jabatan';
    protected static ?string $slug = 'jabatan';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama_jabatan')
                    ->label('Nama Jabatan')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('gaji')
                    ->required()
                    ->numeric(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama_jabatan')
                    ->label('Nama Jabatan')
                    ->searchable(),
                Tables\Columns\TextColumn::make('gaji')
                    ->money('IDR', locale: 'id_ID')
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make()
                    ->label('Hapus')
                    ->modalHeading('Hapus Jabatan')
                    ->modalDescription('Apakah Anda yakin ingin menghapus jabatan ini?')
                    ->modalSubmitActionLabel('Hapus')
                    ->modalCancelActionLabel('Batal')
                    ->successNotificationTitle('Jabatan berhasil dihapus'),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make()
                        ->label('Hapus Data Terpilih'),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListJabatan::route('/'),
            'create' => Pages\CreateJabatan::route('/create'),
            'edit' => Pages\EditJabatan::route('/{record}/edit'),
        ];
    }
}
