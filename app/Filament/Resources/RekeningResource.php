<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RekeningResource\Pages;
use App\Filament\Resources\RekeningResource\RelationManagers;
use App\Models\Rekening;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class RekeningResource extends Resource
{
    protected static ?string $model = Rekening::class;

    protected static ?string $navigationIcon = 'heroicon-o-credit-card';
    protected static ?string $slug = 'rekening';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Form Rekening')
                    ->description('Silahkan isi form berikut dengan data yang benar.')
                    ->columns(1)
                    ->schema([
                        Forms\Components\TextInput::make('nama_bank')
                            ->label('Nama Bank')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('no_rekening')
                            ->label('Nomor Rekening')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('atas_nama')
                            ->label('Atas Nama')
                            ->required()
                            ->maxLength(255),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama_bank')
                    ->searchable(),
                Tables\Columns\TextColumn::make('no_rekening')
                    ->searchable(),
                Tables\Columns\TextColumn::make('atas_nama')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Dibuat')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->label('Diperbarui')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListRekening::route('/'),
            'create' => Pages\CreateRekening::route('/create'),
            'edit' => Pages\EditRekening::route('/{record}/edit'),
        ];
    }
}
