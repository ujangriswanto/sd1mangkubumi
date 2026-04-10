<?php

namespace App\Filament\Admin\Resources\Konselings\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Checkbox;

class KonselingForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('student_id')
                    ->relationship('student', 'name')
                    ->searchable()
                    ->required(),

                DatePicker::make('tanggal')
                    ->required(),

                Textarea::make('uraian_masalah')
                    ->label('Uraian Masalah')
                    ->required(),

                Checkbox::make('bimbingan_individu')
                    ->label('Bimbingan Individu'),

                Checkbox::make('bimbingan_kelompok')
                    ->label('Bimbingan Kelompok'),

                Textarea::make('penyelesaian'),

                Textarea::make('tindak_lanjut'),

                Select::make('status')
                    ->options([
                        'proses' => 'Proses',
                        'selesai' => 'Selesai',
                    ])
                    ->default('proses')
            ]);
    }
}
