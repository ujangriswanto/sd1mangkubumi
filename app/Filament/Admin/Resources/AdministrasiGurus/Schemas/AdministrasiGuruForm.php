<?php

namespace App\Filament\Admin\Resources\AdministrasiGurus\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\FileUpload;
use App\Models\SchoolClass;

class AdministrasiGuruForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('judul')
                    ->required(),

                Select::make('jenis_file')
                    ->options([
                        'prota' => 'PROTA',
                        'prosem' => 'PROSEM',
                        'cp' => 'Capaian Pembelajaran',
                        'atp' => 'Alur Tujuan Pembelajaran',
                        'kktp' => 'KKTP',
                        'modul' => 'Modul Ajar',
                        'bank_soal' => 'Bank Soal',
                    ])
                    ->required(),

                Select::make('kelas_id')
                    ->label('Kelas')
                    ->options(function () {

                        $user = auth()->user();

                        // kalau guru → hanya kelas dia
                        if ($user->hasRole('guru')) {

                            $teacher = $user->teacherStaff;

                            if (!$teacher) {
                                return [];
                            }

                            return SchoolClass::where('teacher_staff_id', $teacher->id)
                                ->pluck('name', 'id');
                        }

                        // admin & kepsek → semua kelas
                        return SchoolClass::pluck('name', 'id');
                    })
                    ->searchable()
                    ->required(),

                TextInput::make('tahun_ajaran'),

                FileUpload::make('file')
                    ->disk('public')
                    ->directory('administrasi-guru')
                    ->acceptedFileTypes([
                        'application/pdf',
                        'application/msword',
                        'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
                    ])
                    ->maxSize(5120)
                    ->required(),
            ]);
    }
}
