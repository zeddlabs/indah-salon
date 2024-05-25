<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PenjualanResource\Pages;
use App\Filament\Resources\PenjualanResource\RelationManagers;
use App\Models\Penjualan;
use App\Models\Produk;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Get;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PenjualanResource extends Resource
{
    protected static ?string $model = Penjualan::class;

    protected static ?string $navigationIcon = 'heroicon-o-inbox-arrow-down';
    protected static ?string $navigationGroup = 'Transaksi';
    protected static ?string $slug = 'penjualan';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Form Penjualan')
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
                        Forms\Components\DatePicker::make('tanggal_pesanan')
                            ->label('Tanggal Pesanan')
                            ->default(now())
                            ->required(),
                        Forms\Components\Select::make('id_produk')
                            ->label('Produk')
                            ->relationship('produk', 'nama_produk')
                            ->searchable()
                            ->preload()
                            ->required(),
                        Forms\Components\TextInput::make('jumlah_produk')
                            ->label('Jumlah Produk')
                            ->afterStateUpdated(function ($state, Get $get, Set $set) {
                                $produk = Produk::find($get('id_produk'));
                                $set('total_biaya', $produk->harga * $state);
                            })
                            ->live()
                            ->required()
                            ->numeric(),
                        Forms\Components\Select::make('id_metode_pembayaran')
                            ->label('Metode Pembayaran')
                            ->relationship('metode_pembayaran', 'nama_metode')
                            ->searchable()
                            ->preload()
                            ->required(),
                        Forms\Components\TextInput::make('total_biaya')
                            ->label('Total Biaya')
                            ->required()
                            ->numeric(),
                        Forms\Components\Select::make('status_pesanan')
                            ->label('Status Pesanan')
                            ->options([
                                'Menunggu Pembayaran' => 'Menunggu Pembayaran',
                                'Diproses' => 'Diproses',
                                'Dikirim' => 'Dikirim',
                                'Selesai' => 'Selesai',
                            ])
                            ->required()
                            ->native(false),
                        Forms\Components\Select::make('status_pembayaran')
                            ->label('Status Pembayaran')
                            ->options([
                                'Belum Dibayar' => 'Belum Dibayar',
                                'Sudah Dibayar' => 'Sudah Dibayar',
                            ])
                            ->required()
                            ->native(false),
                        Forms\Components\FileUpload::make('bukti_pembayaran')
                            ->label('Bukti Pembayaran')
                            ->acceptedFileTypes(['image/*', 'application/pdf'])
                            ->maxSize(2048)
                            ->columnSpanFull(),
                    ])->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('invoice')
                    ->searchable(),
                Tables\Columns\TextColumn::make('pelanggan.nama')
                    ->label('Nama Pelanggan')
                    ->searchable(),
                Tables\Columns\TextColumn::make('metode_pembayaran.nama_metode')
                    ->label('Metode Pembayaran')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tanggal_pesanan')
                    ->date('d F Y')
                    ->sortable(),
                Tables\Columns\TextColumn::make('total_biaya')
                    ->money('IDR', locale: 'id')
                    ->sortable(),
                Tables\Columns\TextColumn::make('status_pesanan'),
                Tables\Columns\TextColumn::make('status_pembayaran'),
                Tables\Columns\ImageColumn::make('bukti_pembayaran')
                    ->square(),
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
                Tables\Actions\ViewAction::make(),
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
            'index' => Pages\ListPenjualan::route('/'),
            'create' => Pages\CreatePenjualan::route('/create'),
            'view' => Pages\ViewPenjualan::route('/{record}'),
            'edit' => Pages\EditPenjualan::route('/{record}/edit'),
        ];
    }
}
