<?php

namespace App\Filament\Admin\Resources\JadwalPelajarans\Schemas;

use Filament\Forms;
use Filament\Schemas\Schema;
use Filament\Forms\Components\DateTimePicker;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\TextInput;
use Filament\Forms\Components\Card;

class JadwalPelajaranForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
        
            ->components([
                Section::make('Konten Jadwal Pelajaran')
                    ->schema([
                        Forms\Components\Select::make('kelas')
                            ->label('Kelas')
                            ->options([
                                'Kelas 1' => 'Kelas 1',
                                'Kelas 2' => 'Kelas 2',
                                'Kelas 3' => 'Kelas 3',
                                'Kelas 4' => 'Kelas 4',
                                'Kelas 5' => 'Kelas 5',
                                'Kelas 6' => 'Kelas 6',
                            ])
                            ->required()
                            ->placeholder('Pilih Kelas'),

                        Forms\Components\TextInput::make('waktu')
                            ->label('Waktu')
                            ->required()
                            ->maxLength(50), 

                        Forms\Components\Select::make('pelajaran')
                            ->label('Pelajaran')
                            ->options([
                                'Upacara' => 'Upacara',
                                'B. Indonesia' => 'B. Indonesia',
                                'PAIBP' => 'PAIBP',
                                'PJOK' => 'PJOK',
                                'Matematika' => 'Matematika',
                                'Pend.Pancasila' => 'Pend.Pancasila',
                                'Seni dan Budaya' => 'Seni dan Budaya',
                                'PjBL' => 'PjBL',
                                'IPAS' => 'IPAS',
                                'B.dan S.Sunda' => 'B.dan S.Sunda',
                                'B. Inggris' => 'B. Inggris',
                                'Istirahat' => 'Istirahat',
                                
                                
                            ])
                            ->required()
                            ->placeholder('Pilih Pelajaran')
                            ->searchable(),


                        Forms\Components\TextInput::make('jam_ke')
                            ->label('Jam Ke')
                            ->required()
                            ->numeric() 
                            ->minValue(1), 
                    ]),

                
                Section::make('Waktu dan Tahun Pelajaran')
                    ->schema([
                        Forms\Components\Select::make('hari')
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

                        Forms\Components\TextInput::make('tahun_pelajaran')
                            ->label('Tahun Pelajaran')
                            ->required()
                            ->maxLength(9), 
                    ])
            ]);
    }
}