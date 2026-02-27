<?php

namespace App\Filament\Admin\Resources\Beritas\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Table;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\TernaryFilter;
use Filament\Tables;
use Filament\Tables\Filters\SelectFilter;
use Filament\Actions\DeleteAction;

class BeritasTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->defaultSort('published_at', 'desc')
            ->columns([
                ImageColumn::make('thumbnail')
                    ->label('Thumb')
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

                TextColumn::make('slug')
                    ->label('Slug')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->copyable()
                    ->copyMessage('Slug disalin')
                    ->searchable(),

                IconColumn::make('is_published')
                    ->label('Publish')
                    ->boolean()
                    ->sortable(),
                 TextColumn::make('category')
                ->badge()
                ->label('Kategori')
                ->color(fn ($state) => match ($state) {
                    'berita' => 'info',
                    'kegiatan' => 'success',
                    'lomba' => 'warning',
                    'olahraga' => 'danger',
                    'ekstrakulikuler' => 'primary',
                    default => 'gray'
                })
                ->sortable(),
                

                TextColumn::make('published_at')
                    ->label('Tanggal')
                    ->dateTime('d M Y H:i')
                    ->sortable(),
            ])
            ->filters([
                TernaryFilter::make('is_published')
                    ->label('Status Publish'),
            ])
            ->recordActions([
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                DeleteBulkAction::make(),
                ]),
            ])

            ->emptyStateHeading('Belum ada berita')
            ->emptyStateDescription('Klik tombol "Buat" untuk menambahkan berita pertama.')
            ->emptyStateIcon('heroicon-o-newspaper');
    }
}
