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
use Filament\Tables\Columns\IconColumn;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\SchoolClass;
use Filament\Notifications\Notification;

class KonselingsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('student.name')->label('Siswa')->searchable(),

                TextColumn::make('tanggal')->date(),

                TextColumn::make('uraian_masalah')
                    ->label('Uraian Masalah')
                    ->limit(30),

                IconColumn::make('bimbingan_individu')
                    ->label('Individu')
                    ->boolean(),

                IconColumn::make('bimbingan_kelompok')
                    ->label('Kelompok')
                    ->boolean(),

                TextColumn::make('penyelesaian')
                    ->limit(30),

                TextColumn::make('tindak_lanjut')
                    ->limit(30),

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
                    ]),

                SelectFilter::make('student_id')
                    ->label('Siswa')
                    ->relationship('student', 'name')
                    ->searchable(),

                SelectFilter::make('kelas')
                    ->label('Kelas')
                    ->options(SchoolClass::all()->pluck('name', 'id'))
                    ->query(function ($query, $data) {
                        if ($data['value']) {
                            $query->whereHas('student', function ($q) use ($data) {
                                $q->where('school_class_id', $data['value']);
                            });
                        }
                    }),
            ])
            ->recordActions([
                Action::make('selesai')
                    ->label('Selesai')
                    ->color('success')
                    ->visible(fn ($record) =>
                        auth()->user()->role === 'kepala_sekolah'
                        && $record->status !== 'selesai' // 👈 ini kunci
                    )
                    ->requiresConfirmation() // 🔥 popup konfirmasi
                    ->modalHeading('Selesaikan Konseling')
                    ->modalDescription('Apakah Anda yakin ingin menandai konseling ini sebagai selesai?')
                    ->modalSubmitActionLabel('Ya, Selesaikan')
                    ->action(function ($record) {
                        $record->update([
                            'status' => 'selesai',
                        ]);

                        Notification::make()
                            ->title('Konseling berhasil diselesaikan')
                            ->success()
                            ->send();
                    }),
                EditAction::make()
                    ->visible(function ($record) {
                        $user = auth()->user();

                        if ($user->role === 'admin') {
                            return true;
                        }

                        if ($user->role === 'guru') {
                            return $record->student?->school_class_id === $user->school_class_id;
                        }

                        return false;
                    }),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make()
                        ->visible(fn () => in_array(auth()->user()->role, ['admin', 'guru'])
                        ),
                ]),
            ])
            ->headerActions([
                Action::make('export_pdf')
                    ->label('Export PDF')
                    ->icon('heroicon-o-document')
                    ->action(function ($livewire) {

                        $filters = $livewire->tableFilters ?? [];

                        $query = \App\Models\Konseling::query()
                            ->with(['student.schoolClass']);

                        // filter siswa
                        $studentId = data_get($filters, 'student_id.value');
                        if ($studentId) {
                            $query->where('student_id', $studentId);
                        }

                        // filter kelas
                        $kelasId = data_get($filters, 'kelas.value');
                        if ($kelasId) {
                            $query->whereHas('student', function ($q) use ($kelasId) {
                                $q->where('school_class_id', $kelasId);
                            });
                        }

                        // 🔥 INI PENTING BANGET
                        $data = $query->get()
                            ->filter(fn ($item) => is_object($item))
                            ->values();

                        $data->load(['student.schoolClass']);

                        // debug (optional)
                        // dd($data->toArray());

                        $kelas = $data->first()?->student?->schoolClass?->name ?? '-';

                        $pdf = \Barryvdh\DomPDF\Facade\Pdf::loadView('pdf.konseling', [
                            'konselings' => $data,
                            'kelas' => $kelas
                        ])->setPaper('A4', 'landscape');

                        return response()->streamDownload(
                            fn () => print($pdf->output()),
                            'laporan-bk.pdf'
                        );
                    })
            ]);
    }
}
