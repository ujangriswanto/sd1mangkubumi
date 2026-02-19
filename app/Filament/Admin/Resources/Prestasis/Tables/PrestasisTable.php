<?php

namespace App\Filament\Admin\Resources\Prestasis\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Table;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Filters\TernaryFilter;

class PrestasisTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->defaultSort('date', 'desc')
            ->columns([
                ImageColumn::make('photo')
                    ->label('Foto')
                    ->height(42)
                    ->width(70)
                    ->extraImgAttributes(['style' => 'object-fit: cover; border-radius: 8px;'])
                    ->defaultImageUrl(function () {
                        return 'https://placehold.co/600x400?text=No+Image';
                    }),

                TextColumn::make('title')
                    ->label('Judul')
                    ->searchable()
                    ->sortable()
                    ->wrap()
                    ->weight('bold'),

                TextColumn::make('level')
                    ->label('Tingkat')
                    ->badge()
                    ->sortable(),

                TextColumn::make('winner_name')
                    ->label('Peraih')
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),

                TextColumn::make('date')
                    ->label('Tanggal')
                    ->date('d M Y')
                    ->sortable(),

                IconColumn::make('is_active')
                    ->label('Aktif')
                    ->boolean()
                    ->sortable(),

                TextColumn::make('sort_order')
                    ->label('Urutan')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                SelectFilter::make('level')
                    ->label('Tingkat')
                    ->options([
                        'Sekolah' => 'Sekolah',
                        'Kecamatan' => 'Kecamatan',
                        'Kota/Kabupaten' => 'Kota/Kabupaten',
                        'Provinsi' => 'Provinsi',
                        'Nasional' => 'Nasional',
                        'Internasional' => 'Internasional',
                    ]),

                TernaryFilter::make('is_active')
                    ->label('Status Tampil'),
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ])

            ->emptyStateHeading('Belum ada data prestasi')
            ->emptyStateDescription('Klik tombol "Buat" untuk menambahkan prestasi.')
            ->emptyStateIcon('heroicon-o-trophy');
    }
}
