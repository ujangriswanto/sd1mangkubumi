<?php

namespace App\Filament\Admin\Resources\Students\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\Action;
use Filament\Tables\Table;
use Filament\Tables\Columns\BadgeColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Filters\TernaryFilter;
use pxlrbt\FilamentExcel\Actions\Tables\ExportAction;
use pxlrbt\FilamentExcel\Exports\ExcelExport;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Student;

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
                ExportAction::make('export_excel')
                    ->label('Export Excel')
                    ->exports([
                        ExcelExport::make()
                            ->fromTable()
                    ]),

                Action::make('export_pdf')
                    ->label('Export PDF')
                    ->icon('heroicon-o-document')
                    ->action(function ($livewire) {

                        $query = $livewire->getFilteredTableQuery();

                        $students = $query->with('schoolClass')->get();

                        $total = $students->count();

                        $perClass = $students
                            ->groupBy('schoolClass.name')
                            ->map->count();

                        $pdf = Pdf::loadView(
                            'pdf.students',
                            compact('students', 'total', 'perClass')
                        );

                        return response()->streamDownload(
                            fn () => print($pdf->output()),
                            'data-siswa.pdf'
                        );
                    }),

                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ])
            ->emptyStateHeading('Belum ada data siswa')
            ->emptyStateDescription('Klik tombol Tambah untuk menambahkan siswa.')
            ->emptyStateIcon('heroicon-o-user-group');
    }
}
