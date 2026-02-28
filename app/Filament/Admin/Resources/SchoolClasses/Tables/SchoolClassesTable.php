<?php

namespace App\Filament\Admin\Resources\SchoolClasses\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Table;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;

class SchoolClassesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->defaultSort('grade_level')
            ->columns([
                TextColumn::make('name')
                    ->label('Nama')
                    ->sortable()
                    ->searchable()
                    ->weight('bold'),

                TextColumn::make('grade_level')
                    ->label('Tingkat')
                    ->formatStateUsing(fn ($state) => 'Kelas ' . $state)
                    ->sortable(),

                TextColumn::make('teacher.name')
                    ->label('Wali Kelas')
                    ->sortable(),

                IconColumn::make('is_active')
                    ->label('Aktif')
                    ->boolean(),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
