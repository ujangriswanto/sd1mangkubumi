<?php

namespace App\Filament\Admin\Resources\PpdbRegistrations\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\Action as TableAction;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use App\Models\Student;
use App\Models\StudentParent;
use App\Models\StudentWali;
use Illuminate\Support\Facades\DB;
use App\Models\SchoolClass;

class PpdbRegistrationsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->defaultSort('created_at', 'desc')
            ->columns([
                TextColumn::make('student_name')
                    ->label('Nama')
                    ->searchable()
                    ->sortable()
                    ->weight('bold'),

                TextColumn::make('gender')
                    ->label('JK')
                    ->badge()
                    ->formatStateUsing(fn ($state) => $state === 'L' ? 'L' : 'P'),

                TextColumn::make('phone')
                    ->label('HP')
                    ->copyable()
                    ->copyMessage('Nomor disalin'),

                TextColumn::make('kk_file')
                    ->label('KK')
                    ->formatStateUsing(fn ($state) => $state ? 'Download' : '-')
                    ->url(fn ($record) => $record->kk_file 
                        ? asset('storage/'.$record->kk_file) 
                        : null
                    )
                    ->openUrlInNewTab(),

                TextColumn::make('kip_file')
                    ->label('KIP')
                    ->formatStateUsing(fn ($state) => $state ? 'Download' : '-')
                    ->url(fn ($record) => $record->kip_file 
                        ? asset('storage/'.$record->kip_file) 
                        : null
                    )
                    ->openUrlInNewTab(),

                TextColumn::make('status')
                    ->label('Status')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'pending' => 'warning',
                        'accepted' => 'success',
                        'rejected' => 'danger',
                        default => 'gray',
                    })
                    ->sortable(),

                TextColumn::make('created_at')
                    ->label('Daftar')
                    ->dateTime('d M Y H:i')
                    ->sortable(),
            ])
            ->filters([
                SelectFilter::make('status')
                    ->label('Status')
                    ->options([
                        'pending' => 'Pending',
                        'accepted' => 'Diterima',
                        'rejected' => 'Ditolak',
                    ]),
            ])
            ->recordActions([
                EditAction::make(),
                DeleteAction::make(),

                TableAction::make('terima')
                ->label('Terima Siswa')
                ->icon('heroicon-o-check-circle')
                ->color('success')
                ->visible(fn ($record) => $record->status === 'pending')
                ->action(function ($record) {

                    DB::transaction(function () use ($record) {

                        // CEK LAGI STATUS DI DATABASE
                        $record->refresh();

                        if ($record->status !== 'pending') {
                            return;
                        }

                        // CEK APAKAH SUDAH ADA STUDENT DENGAN NISN YANG SAMA
                        $existingStudent = Student::where('name', $record->student_name)
                            ->whereDate('birth_date', $record->birth_date)
                            ->first();

                        if ($existingStudent) {
                            $record->update([
                                'status' => 'accepted',
                            ]);
                            return;
                        }

                        $class = SchoolClass::where('grade_level', 1)->first();

                        // Buat siswa baru
                        $student = Student::create([
                            'nis' => null,
                            'name' => $record->student_name,
                            'gender' => $record->gender,
                            'birth_date' => $record->birth_date,
                            'phone' => $record->phone,
                            'address' => $record->address,
                            'school_class_id' => $class?->id,
                            'nisn' => $record->nisn,
                            'nik' => $record->nik,
                            'no_kk' => $record->no_kk,
                            'no_akta_lahir' => $record->no_akta_lahir,
                            'religion' => $record->religion,
                            'citizenship' => $record->citizenship,
                            'special_needs' => $record->special_needs,
                            'residence_type' => $record->residence_type,
                            'transportation' => $record->transportation,
                            'child_order' => $record->child_order,
                            'has_kip' => $record->has_kip,
                            'will_receive_kip' => $record->will_receive_kip,
                            'kip_rejection_reason' => $record->kip_rejection_reason,
                            'kk_file' => $record->kk_file,
                            'kip_file' => $record->kip_file,
                            'is_active' => true,
                        ]);

                        foreach ($record->parents as $parent) {
                            $student->parents()->create([
                                'type' => $parent->type,
                                'name' => $parent->name,
                                'nik' => $parent->nik,
                                'birth_year' => $parent->birth_year,
                                'education' => $parent->education,
                                'occupation' => $parent->occupation,
                                'monthly_income' => $parent->monthly_income,
                                'special_needs' => $parent->special_needs,
                            ]);
                        }

                        if ($record->wali) {
                            $student->wali()->create([
                                'name' => $record->wali->name,
                                'nik' => $record->wali->nik,
                                'birth_year' => $record->wali->birth_year,
                                'education' => $record->wali->education,
                                'occupation' => $record->wali->occupation,
                                'monthly_income' => $record->wali->monthly_income,
                            ]);
                        }

                        $record->update([
                            'status' => 'accepted',
                        ]);
                    });
                }),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ])
            ->emptyStateHeading('Belum ada pendaftar')
            ->emptyStateDescription('Data pendaftar akan muncul jika sudah ada yang mendaftar.')
            ->emptyStateIcon('heroicon-o-document-text');
    }
}
