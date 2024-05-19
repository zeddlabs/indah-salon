<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LayananResource\Pages;
use App\Filament\Resources\LayananResource\RelationManagers;
use App\Models\Layanan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class LayananResource extends Resource
{
    protected static ?string $model = Layanan::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-group';
    protected static ?string $navigationGroup = 'Manajemen Salon';
    protected static ?string $slug = 'layanan';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Form Layanan')
                    ->description('Silahkan isi form berikut dengan data yang benar.')
                    ->schema([
                        Forms\Components\TextInput::make('nama_layanan')
                            ->label('Nama Layanan')
                            ->maxLength(255)
                            ->required()
                            ->columnSpanFull(),
                        Forms\Components\Textarea::make('deskripsi')
                            ->required()
                            ->columnSpanFull(),
                        Forms\Components\TextInput::make('harga')
                            ->numeric()
                            ->required()
                            ->prefix('Rp.'),
                        Forms\Components\TextInput::make('durasi')
                            ->numeric()
                            ->required()
                            ->suffix('menit'),
                        Forms\Components\FileUpload::make('foto')
                            ->image()
                            ->maxSize(2048)
                            ->required()
                            ->validationMessages([
                                'required' => 'Foto harus diisi.',
                            ])
                            ->columnSpanFull(),
                    ])
                    ->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('foto')
                    ->size(100)
                    ->square(),
                Tables\Columns\TextColumn::make('nama_layanan')
                    ->label('Nama Layanan')
                    ->searchable(),
                Tables\Columns\TextColumn::make('harga')
                    ->money('IDR', locale: 'id')
                    ->sortable(),
                Tables\Columns\TextColumn::make('durasi')
                    ->numeric()
                    ->sortable()
                    ->suffix(' menit'),
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
                    ->label('Detail')
                    ->modalHeading('Detail Layanan'),
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
            'index' => Pages\ListLayanan::route('/'),
            'create' => Pages\CreateLayanan::route('/create'),
            'edit' => Pages\EditLayanan::route('/{record}/edit'),
        ];
    }
}
