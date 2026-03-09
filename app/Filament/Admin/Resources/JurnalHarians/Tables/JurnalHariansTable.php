<?php

namespace App\Filament\Admin\Resources\JurnalHarians\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\Action;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use App\Models\TeacherStaff;
use App\Models\SchoolClass;

class JurnalHariansTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('teacherStaff.name')
                    ->label('Guru')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('schoolClass.name')
                    ->label('Kelas')
                    ->sortable(),

                TextColumn::make('semester')
                    ->badge()
                    ->sortable(),

                TextColumn::make('tanggal')
                    ->date()
                    ->sortable(),

                TextColumn::make('judul_pembelajaran')
                    ->limit(40)
                    ->searchable(),

                TextColumn::make('materi_pokok')
                    ->limit(30),

                TextColumn::make('created_at')
                    ->dateTime('d M Y')
                    ->label('Dibuat'),
            ])
            ->filters([
                SelectFilter::make('teacher_staff_id')
                    ->label('Guru')
                    ->options(
                        TeacherStaff::pluck('name', 'id')
                    ),

                SelectFilter::make('school_class_id')
                    ->label('Kelas')
                    ->options(
                        SchoolClass::pluck('name', 'id')
                    ),

                SelectFilter::make('semester')
                    ->options([
                        'Ganjil' => 'Ganjil',
                        'Genap' => 'Genap',
                    ]),
            ])
            ->recordActions([
                Action::make('pdf')
                    ->label('PDF')
                    ->icon('heroicon-o-arrow-down-tray')
                    ->url(fn ($record) => url('/jurnal/'.$record->id.'/pdf'))
                    ->openUrlInNewTab(),
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
