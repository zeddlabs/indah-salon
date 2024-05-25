<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MetodePembayaranResource\Pages;
use App\Filament\Resources\MetodePembayaranResource\RelationManagers;
use App\Models\MetodePembayaran;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class MetodePembayaranResource extends Resource
{
    protected static ?string $model = MetodePembayaran::class;

    protected static ?string $navigationIcon = 'heroicon-o-banknotes';
    protected static ?string $navigationGroup = 'Manajemen Pembayaran';
    protected static ?int $navigationSort = 1;
    protected static ?string $slug = 'metode-pembayaran';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Form Metode Pembayaran')
                    ->description('Silahkan isi form berikut dengan data yang benar.')
                    ->schema([
                        Forms\Components\TextInput::make('nama_metode')
                            ->label('Nama Metode')
                            ->placeholder('Contoh: Transfer Bank BRI')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\Select::make('jenis_metode')
                            ->label('Jenis Metode')
                            ->options([
                                'Tunai' => 'Tunai',
                                'Transfer' => 'Transfer',
                            ])
                            ->required()
                            ->native(false),
                        Forms\Components\Select::make('id_rekening')
                            ->relationship('rekening', 'nama_bank')
                            ->searchable()
                            ->preload(),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama_metode')
                    ->label('Nama Metode')
                    ->searchable(),
                Tables\Columns\TextColumn::make('jenis_metode')
                    ->label('Jenis Metode')
                    ->searchable(),
                Tables\Columns\TextColumn::make('rekening.nama_bank')
                    ->label('Nama Bank')
                    ->searchable(),
                Tables\Columns\TextColumn::make('rekening.no_rekening')
                    ->label('Nomor Rekening')
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
            'index' => Pages\ListMetodePembayaran::route('/'),
            'create' => Pages\CreateMetodePembayaran::route('/create'),
            'edit' => Pages\EditMetodePembayaran::route('/{record}/edit'),
        ];
    }
}
