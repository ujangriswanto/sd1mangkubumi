<?php

namespace App\Filament\Admin\Resources\TataTertibSekolahs\Tables;

use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;

class TataTertibSekolahsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                // Kolom 1: Nama Peraturan
                TextColumn::make('nama_peraturan')
                    ->label('Nama Peraturan')
                    ->searchable()
                    ->sortable()
                    ->wrap(),

                // Kolom 2: Cuplikan Isi Peraturan
                TextColumn::make('isi_peraturan')
                    ->label('Isi Peraturan')
                    ->limit(200) 
                    ->html() 
                    ->color('gray'),

                // Kolom 3: Tanggal Dibuat
                TextColumn::make('created_at')
                    ->label('Dibuat Pada')
                    ->dateTime('d M Y')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
               
            ])
            ->actions([
                ViewAction::make(), 
                EditAction::make()
                    ->color('warning'),
                DeleteAction::make(),
            ])
            ->bulkActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ])
            ->emptyStateHeading('Belum Ada Peraturan')
            ->emptyStateDescription('Klik tombol "New" untuk membuat peraturan sekolah pertama.')
            ->emptyStateIcon('heroicon-o-clipboard-document-list');
    }
}