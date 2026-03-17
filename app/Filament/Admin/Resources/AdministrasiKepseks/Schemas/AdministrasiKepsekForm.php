<?php

namespace App\Filament\Admin\Resources\AdministrasiKepseks\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\FileUpload;

class AdministrasiKepsekForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('judul')
                    ->required(),

                Select::make('jenis_file')
                    ->options([
                        'ksp' => 'KSP',
                        'rkjm' => 'RKJM',
                        'rkts' => 'RKTS',
                        'pkg' => 'PKG',
                        'skp' => 'SKP',
                        'agenda' => 'Agenda Harian',
                    ])
                    ->required(),

                TextInput::make('tahun_ajaran'),

                FileUpload::make('file')
                    ->disk('public')
                    ->directory('administrasi-kepsek')
                    ->required(),
                    ]);
    }
}
