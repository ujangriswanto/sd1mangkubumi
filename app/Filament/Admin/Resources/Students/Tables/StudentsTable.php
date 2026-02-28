<?php

namespace App\Filament\Admin\Resources\Students\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Table;
use Filament\Tables\Columns\BadgeColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Filters\TernaryFilter;

class StudentsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->defaultSort('school_class_id')
            ->columns([
                TextColumn::make('nis')
                    ->label('NIS')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('name')
                    ->label('Nama')
                    ->searchable()
                    ->sortable()
                    ->weight('bold'),

                BadgeColumn::make('gender')
                    ->label('JK')
                    ->colors([
                        'primary' => 'L',
                        'pink' => 'P',
                    ])
                    ->formatStateUsing(fn ($state) =>
                        $state === 'L' ? 'Laki-laki' : 'Perempuan'
                    )
                    ->sortable(),

                TextColumn::make('schoolClass.name')
                    ->label('Kelas')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('birth_date')
                    ->label('Tanggal Lahir')
                    ->date('d M Y')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),

                ToggleColumn::make('is_active')
                    ->label('Aktif'),

                TextColumn::make('created_at')
                    ->label('Dibuat')
                    ->dateTime('d M Y H:i')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                SelectFilter::make('school_class_id')
                    ->label('Filter Kelas')
                    ->relationship('schoolClass', 'name'),

                TernaryFilter::make('is_active')
                    ->label('Status Aktif'),
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ])
            ->emptyStateHeading('Belum ada data siswa')
            ->emptyStateDescription('Klik tombol Tambah untuk menambahkan siswa.')
            ->emptyStateIcon('heroicon-o-user-group');
    }
}
