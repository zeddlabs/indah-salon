<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PerawatanResource\Pages;
use App\Filament\Resources\PerawatanResource\RelationManagers;
use App\Models\Layanan;
use App\Models\Perawatan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Get;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PerawatanResource extends Resource
{
    protected static ?string $model = Perawatan::class;

    protected static ?string $navigationIcon = 'heroicon-o-ticket';
    protected static ?string $navigationGroup = 'Transaksi';
    protected static ?string $slug = 'perawatan';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Form Perawatan')
                    ->description('Silahkan isi form berikut dengan data yang benar.')
                    ->schema([
                        Forms\Components\TextInput::make('invoice')
                            ->default('INV' . date('YmdHis'))
                            ->required()
                            ->readOnly()
                            ->columnSpanFull(),
                        Forms\Components\Select::make('id_pelanggan')
                            ->label('Nama Pelanggan')
                            ->relationship('pelanggan', 'nama')
                            ->searchable()
                            ->preload()
                            ->required(),
                        Forms\Components\Select::make('id_layanan')
                            ->label('Layanan')
                            ->relationship('layanan', 'nama_layanan')
                            ->searchable()
                            ->preload()
                            ->required()
                            ->afterStateUpdated(function ($state, Set $set) {
                                $layanan = Layanan::find($state);
                                $set('biaya_perawatan', $layanan->harga);
                            })
                            ->live(),
                        Forms\Components\DatePicker::make('tanggal_perawatan')
                            ->label('Tanggal Perawatan')
                            ->required(),
                        Forms\Components\TimePicker::make('jam_perawatan')
                            ->label('Jam Perawatan')
                            ->required()
                            ->seconds(false)
                            ->native(false)
                            ->minutesStep(15),
                        Forms\Components\Textarea::make('catatan')
                            ->columnSpanFull(),
                        Forms\Components\TextInput::make('biaya_perawatan')
                            ->label('Biaya Perawatan')
                            ->required()
                            ->numeric()
                            ->readOnly()
                            ->columnSpanFull(),
                    ])->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('invoice'),
                Tables\Columns\TextColumn::make('layanan.nama_layanan')
                    ->label('Layanan')
                    ->searchable(),
                Tables\Columns\TextColumn::make('pelanggan.nama')
                    ->label('Nama Pelanggan')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tanggal_perawatan')
                    ->label('Tanggal Perawatan')
                    ->date('d F Y')
                    ->sortable(),
                Tables\Columns\TextColumn::make('jam_perawatan')
                    ->label('Jam Perawatan')
                    ->time('H:i')
                    ->sortable(),
                Tables\Columns\TextColumn::make('biaya_perawatan')
                    ->label('Biaya Perawatan')
                    ->money('IDR', locale: 'id')
                    ->sortable(),
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
                Tables\Actions\ViewAction::make()
                    ->label('Detail'),
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
            'index' => Pages\ListPerawatan::route('/'),
            'create' => Pages\CreatePerawatan::route('/create'),
            'view' => Pages\ViewPerawatan::route('/{record}'),
            'edit' => Pages\EditPerawatan::route('/{record}/edit'),
        ];
    }
}
