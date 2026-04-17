<?php

namespace App\Filament\Admin\Resources\Grades\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Table;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Columns\TextColumn;

class GradesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('student.name')->label('Nama')->searchable(),
                TextColumn::make('subject.name')->label('Mapel'),
                TextColumn::make('schoolClass.name')->label('Kelas'),

                TextColumn::make('semester'),
                TextColumn::make('tahun_ajaran'),

                TextColumn::make('rata_rata')
                    ->label('Rata-rata')
                    ->formatStateUsing(fn ($record) => $record->rata_rata ?? '-'),

                TextColumn::make('uts')->label('UTS'),
                TextColumn::make('uas')->label('UAS'),

                TextColumn::make('nilai_rapor')
                    ->label('Nilai Rapor')
                    ->formatStateUsing(fn ($record) => $record->nilai_rapor ?? '-'),
            ])
            ->filters([
                SelectFilter::make('school_class_id')
                    ->relationship('schoolClass', 'name')
                    ->label('Kelas'),

                SelectFilter::make('subject_id')
                    ->relationship('subject', 'name')
                    ->label('Mapel'),

                SelectFilter::make('semester')
                    ->options([
                        '1' => 'Semester 1',
                        '2' => 'Semester 2',
                    ]),
            ])
            ->modifyQueryUsing(function ($query) {
                if (auth()->user()->hasRole('guru')) {
                    $classId = auth()->user()?->teacherStaff?->schoolClass?->id;

                    if ($classId) {
                        $query->where('school_class_id', $classId);
                    }
                }
            })
            ->actions([
                ViewAction::make(),
                EditAction::make()
                    ->visible(fn () => auth()->check() && auth()->user()->hasRole('guru')),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
