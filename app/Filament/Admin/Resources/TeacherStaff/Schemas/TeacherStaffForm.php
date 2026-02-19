<?php

namespace App\Filament\Admin\Resources\TeacherStaff\Schemas;

use Filament\Schemas\Schema;
use Filament\Schemas\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;

class TeacherStaffForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Data Guru / Staff')
                    ->description('Isi informasi guru atau staff sekolah.')
                    ->schema([
                        TextInput::make('name')
                            ->label('Nama')
                            ->required()
                            ->maxLength(255)
                            ->columnSpan(2),

                        TextInput::make('position')
                            ->label('Jabatan')
                            ->required()
                            ->maxLength(255)
                            ->placeholder('Contoh: Kepala Sekolah, Guru Kelas 1A, Tata Usaha')
                            ->columnSpan(2),

                        FileUpload::make('photo')
                            ->label('Foto')
                            ->image()
                            ->directory('teacher-staff')
                            ->imageEditor()
                            ->imageResizeMode('cover')
                            ->imageCropAspectRatio('1:1')
                            ->maxSize(2048)
                            ->helperText('Upload foto (disarankan rasio 1:1). Maks 2MB.')
                            ->columnSpan(2),

                        Textarea::make('bio')
                            ->label('Deskripsi Singkat')
                            ->rows(4)
                            ->maxLength(1000)
                            ->helperText('Opsional. Misalnya pengalaman, bidang, atau info singkat.')
                            ->columnSpanFull(),
                    ])
                    ->columns(4),

                Section::make('Pengaturan Tampilan')
                    ->schema([
                        Toggle::make('is_active')
                            ->label('Tampilkan di Website')
                            ->default(true),

                        TextInput::make('sort_order')
                            ->label('Urutan')
                            ->numeric()
                            ->default(0)
                            ->helperText('Semakin kecil, semakin di atas.')
                            ->minValue(0),
                    ])
                    ->columns(2),
            ]);
    }
}
