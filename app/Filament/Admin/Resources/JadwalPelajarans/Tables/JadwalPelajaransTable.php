<?php

namespace App\Filament\Admin\Resources\JadwalPelajarans\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;

class JadwalPelajaransTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('hari')
                    ->label('Hari')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'Senin'  => 'primary',
                        'Selasa' => 'info',
                        'Rabu'   => 'success',
                        'Kamis'  => 'warning',
                        'Jumat'  => 'danger',
                        'Sabtu'  => 'gray',
                        default  => 'gray',
                    })
                    ->sortable(),

                TextColumn::make('schoolClass.name')
                    ->label('Kelas')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('jam_ke')
                    ->label('Jam Ke')
                    ->sortable()
                    ->alignCenter()
                    ->prefix('Jam '),

                TextColumn::make('waktu')
                    ->label('Waktu')
                    ->icon('heroicon-o-clock')
                    ->searchable(),

                TextColumn::make('subject.name')
                    ->label('Mata Pelajaran')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('tahun_pelajaran')
                    ->label('Tahun Pelajaran')
                    ->icon('heroicon-o-academic-cap')
                    ->sortable(),
            ])

            ->filters([
                SelectFilter::make('hari')
                    ->label('Filter Hari')
                    ->options([
                        'Senin'  => 'Senin',
                        'Selasa' => 'Selasa',
                        'Rabu'   => 'Rabu',
                        'Kamis'  => 'Kamis',
                        'Jumat'  => 'Jumat',
                        'Sabtu'  => 'Sabtu',
                    ]),

                SelectFilter::make('kelas')
                    ->label('Filter Kelas')
                    ->options([
                        'Kelas 1' => 'Kelas 1',
                        'Kelas 2' => 'Kelas 2',
                        'Kelas 3' => 'Kelas 3',
                        'Kelas 4' => 'Kelas 4',
                        'Kelas 5' => 'Kelas 5',
                        'Kelas 6' => 'Kelas 6',
                    ]),

                SelectFilter::make('pelajaran')
                    ->label('Filter Pelajaran')
                    ->options([
                        'Upacara'         => 'Upacara',
                        'B. Indonesia'    => 'B. Indonesia',
                        'PAIBP'           => 'PAIBP',
                        'PJOK'            => 'PJOK',
                        'Matematika'      => 'Matematika',
                        'Pend.Pancasila'  => 'Pend.Pancasila',
                        'Seni dan Budaya' => 'Seni dan Budaya',
                        'PjBL'            => 'PjBL',
                        'IPAS'            => 'IPAS',
                        'B.dan S.Sunda'   => 'B.dan S.Sunda',
                        'B. Inggris'      => 'B. Inggris',
                        'Istirahat'       => 'Istirahat',
                    ]),

                SelectFilter::make('tahun_pelajaran')
                    ->label('Tahun Pelajaran')
                    ->options([
                        '2024/2025' => '2024/2025',
                        '2025/2026' => '2025/2026',
                    ]),
            ])

            ->defaultSort('hari')
            ->striped()
            ->searchable()

            ->recordActions([
                ViewAction::make(),
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}