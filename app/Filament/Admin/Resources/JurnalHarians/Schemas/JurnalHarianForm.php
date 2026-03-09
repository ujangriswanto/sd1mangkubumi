<?php

namespace App\Filament\Admin\Resources\JurnalHarians\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Hidden;


class JurnalHarianForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Hidden::make('school_class_id')
                    ->default(function () {

                        $user = auth()->user();

                        if (!$user) return null;

                        $teacher = $user->teacherStaff;

                        if (!$teacher) return null;

                        return optional($teacher->schoolClass)->id;
                    }),

                Select::make('school_class_id')
                    ->relationship('schoolClass', 'name')
                    ->disabled()
                    ->dehydrated()
                    ->default(fn () =>
                        optional(
                            optional(auth()->user()->teacherStaff)->schoolClass
                        )->id
                    ),

                Select::make('semester')
                    ->options([
                        'Ganjil' => 'Ganjil',
                        'Genap' => 'Genap',
                    ])
                    ->required(),

                DatePicker::make('tanggal')->required(),

                TextInput::make('judul_pembelajaran')
                    ->label('Alur Judul Pembelajaran')
                    ->required(),

                Textarea::make('materi_pokok')
                    ->required(),

                RichEditor::make('kegiatan')
                    ->required(),

                Textarea::make('penilaian')
                    ->required(),
                            ]);
    }
}
