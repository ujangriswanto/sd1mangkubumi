<?php

namespace App\Filament\Admin\Resources\Grades\Schemas;

use Filament\Schemas\Schema;
use Filament\Schemas\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Repeater;

class GradeForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Informasi Nilai')
                    ->schema([
                    Select::make('school_class_id')
                        ->label('Kelas')
                        ->relationship('schoolClass', 'name')
                        ->default(fn () => auth()->user()?->teacherStaff?->schoolClass?->id)
                        ->disabled(fn () => auth()->user()->hasRole('guru'))
                        ->dehydrated()
                        ->required()
                        ->live(),

                    Select::make('student_id')
                        ->label('Siswa')
                        ->relationship(
                            'student',
                            'name',
                            fn ($query, $get) =>
                                $query->where('school_class_id', $get('school_class_id'))
                        )
                        ->searchable()
                        ->preload()
                        ->required()
                        ->live(),

                    Select::make('subject_id')
                        ->label('Mata Pelajaran')
                        ->relationship('subject', 'name')
                        ->required(),

                    Select::make('semester')
                        ->options([
                            '1' => 'Semester 1',
                            '2' => 'Semester 2',
                        ])
                        ->required(),

                    TextInput::make('tahun_ajaran')
                        ->placeholder('2025/2026')
                        ->required(),
                ]),

                Section::make('Nilai Formatif (TP)')
                    ->schema([
                        Repeater::make('details')
                            ->relationship()
                            ->schema([
                                TextInput::make('type')
                                    ->label('TP (contoh: TP1)')
                                    ->required(),

                                TextInput::make('score')
                                    ->numeric()
                                    ->required(),
                            ])
                            ->columns(2)
                            ->defaultItems(3),
                    ]),

                Section::make('Nilai Sumatif')
                    ->schema([
                        TextInput::make('uts')
                            ->label('UTS')
                            ->numeric(),

                        TextInput::make('uas')
                            ->label('UAS')
                            ->numeric(),
                    ])
                    ->columns(2),
            ]);
    }
}
