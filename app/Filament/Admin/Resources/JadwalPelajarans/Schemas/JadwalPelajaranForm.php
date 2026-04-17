<?php

namespace App\Filament\Admin\Resources\JadwalPelajarans\Schemas;

use Filament\Forms;
use Filament\Schemas\Schema;
use Filament\Schemas\Components\Section;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Select;


class JadwalPelajaranForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
        
            ->components([
                Section::make('Konten Jadwal Pelajaran')
                    ->schema([
                        Select::make('school_class_id')
                            ->label('Kelas')
                            ->relationship('schoolClass', 'name')
                            ->default(fn () => auth()->user()?->teacherStaff?->schoolClass?->id)
                            ->disabled(fn () => auth()->user()?->hasRole('guru')) // 🔥 guru gak bisa ubah
                            ->dehydrated()
                            ->required(),

                        TextInput::make('waktu')
                            ->label('Waktu')
                            ->required()
                            ->maxLength(50), 

                        Select::make('subject_id')
                            ->label('Pelajaran')
                            ->relationship('subject', 'name')
                            ->required()
                            ->preload()
                            ->searchable()
                            ->nullable(),

                        TextInput::make('jam_ke')
                            ->label('Jam Ke')
                            ->numeric() 
                            ->minValue(0), 
                    ]),

                Section::make('Waktu dan Tahun Pelajaran')
                    ->schema([
                        Select::make('hari')
                            ->label('Hari')
                            ->options([
                                'Senin' => 'Senin',
                                'Selasa' => 'Selasa',
                                'Rabu' => 'Rabu',
                                'Kamis' => 'Kamis',
                                'Jumat' => 'Jumat',
                                'Sabtu' => 'Sabtu',
                            ])
                            ->required()
                            ->placeholder('Pilih Hari'), 

                        TextInput::make('tahun_pelajaran')
                            ->label('Tahun Pelajaran')
                            ->required()
                            ->maxLength(9), 
                    ])
            ]);
    }
}