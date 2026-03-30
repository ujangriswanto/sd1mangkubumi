<?php

namespace App\Filament\Admin\Resources\Konselings\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\Action;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\BadgeColumn;
use Filament\Tables\Filters\SelectFilter;

class KonselingsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('student.name')->label('Siswa')->searchable(),

                TextColumn::make('tanggal')->date(),

                BadgeColumn::make('jenis')
                    ->colors([
                        'primary',
                        'success' => 'akademik',
                        'warning' => 'sosial',
                    ]),

                TextColumn::make('masalah')->limit(30),

                BadgeColumn::make('status')
                    ->colors([
                        'warning' => 'proses',
                        'success' => 'selesai',
                    ]),
            ])
            ->filters([
                SelectFilter::make('status')
                    ->options([
                        'proses' => 'Proses',
                        'selesai' => 'Selesai',
                    ])
            ])
            ->recordActions([
                Action::make('selesai')
                    ->label('Selesai')
                    ->color('success')
                    ->action(fn ($record) => $record->update([
                        'status' => 'selesai'
                    ])),
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
