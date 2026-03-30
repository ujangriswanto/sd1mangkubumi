<?php

namespace App\Filament\Admin\Resources\Konselings\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Textarea;

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

                Select::make('jenis')
                    ->options([
                        'pribadi' => 'Pribadi',
                        'akademik' => 'Akademik',
                        'sosial' => 'Sosial',
                    ])
                    ->required(),

                Textarea::make('masalah')
                    ->required()
                    ->rows(3),

                Textarea::make('tindakan')
                    ->rows(3),

                Select::make('status')
                    ->options([
                        'proses' => 'Proses',
                        'selesai' => 'Selesai',
                    ])
                    ->default('proses')
            ]);
    }
}
