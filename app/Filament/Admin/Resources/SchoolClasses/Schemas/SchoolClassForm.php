<?php

namespace App\Filament\Admin\Resources\SchoolClasses\Schemas;

use Filament\Schemas\Schema;
use Filament\Schemas\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;

class SchoolClassForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Data Kelas')
                    ->schema([
                        TextInput::make('name')
                            ->label('Nama Kelas')
                            ->required()
                            ->maxLength(50),

                        Select::make('grade_level')
                            ->label('Tingkat')
                            ->required()
                            ->options([
                                1 => 'Kelas 1',
                                2 => 'Kelas 2',
                                3 => 'Kelas 3',
                                4 => 'Kelas 4',
                                5 => 'Kelas 5',
                                6 => 'Kelas 6',
                            ])
                            ->native(false),

                        Select::make('teacher_staff_id')
                            ->label('Wali Kelas')
                            ->relationship('teacher', 'name')
                            ->searchable()
                            ->preload()
                            ->native(false),

                        Toggle::make('is_active')
                            ->label('Aktif')
                            ->default(true),
                    ])
                    ->columns(2),
            ])
            ->statePath('data');
    }
}
