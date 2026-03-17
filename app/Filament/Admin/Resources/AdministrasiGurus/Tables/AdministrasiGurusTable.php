<?php

namespace App\Filament\Admin\Resources\AdministrasiGurus\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\Action;
use Filament\Actions\ActionGroup;
use Filament\Actions\EditAction;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\BadgeColumn;

class AdministrasiGurusTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('judul')->searchable(),

                TextColumn::make('file')
                ->label('Preview')
                ->formatStateUsing(fn ($state) =>
                    '<a href="'.asset('storage/'.$state).'" target="_blank">Lihat</a>'
                )
                ->html(),

                TextColumn::make('kelas.name')
                    ->label('Kelas')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('user.name')
                    ->label('Guru'),

                TextColumn::make('tahun_ajaran'),
                
                BadgeColumn::make('status')
                    ->colors([
                        'warning' => 'pending',
                        'success' => 'approved',
                        'danger' => 'rejected',
                    ])
                    ->icons([
                        'heroicon-o-clock' => 'pending',
                        'heroicon-o-check' => 'approved',
                        'heroicon-o-x-mark' => 'rejected',
                    ]),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                ActionGroup::make([
                    Action::make('approve')
                        ->label('Approve')
                        ->visible(fn ($record) =>
                            auth()->user()->hasRole('kepala_sekolah')
                            && $record->status === 'pending'
                        )
                        ->requiresConfirmation()
                        ->action(function ($record) {

                            $record->status = 'approved';
                            $record->approved_by = auth()->id();
                            $record->approved_at = now();
                            $record->save();

                        })
                        ->successNotificationTitle('Berhasil diapprove')
                        ->color('success')
                        ->icon('heroicon-o-check'),


                    Action::make('reject')
                        ->label('Reject')
                        ->visible(fn ($record) =>
                            auth()->user()->hasRole('kepala_sekolah')
                            && $record->status === 'pending'
                        )
                        ->requiresConfirmation()
                        ->action(function ($record) {

                            $record->status = 'rejected';
                            $record->save();

                        })
                        ->successNotificationTitle('file ditolak')
                        ->color('danger')
                        ->icon('heroicon-o-x-mark'),


                    Action::make('download')
                        ->label('Download')
                        ->url(fn ($record) => asset('storage/'.$record->file))
                        ->openUrlInNewTab()
                        ->icon('heroicon-o-arrow-down-tray'),


                    EditAction::make(),

                ])
                ->label('Aksi')
                ->icon('heroicon-o-ellipsis-vertical')
                ->color('primary')
                ->button(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
