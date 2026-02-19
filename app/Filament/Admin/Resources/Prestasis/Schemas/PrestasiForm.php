<?php

namespace App\Filament\Admin\Resources\Prestasis\Schemas;

use Filament\Schemas\Schema;
use Filament\Schemas\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;

class PrestasiForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Data Prestasi')
                    ->schema([
                        TextInput::make('title')
                            ->label('Judul Prestasi')
                            ->required()
                            ->maxLength(255)
                            ->columnSpanFull(),

                        Select::make('level')
                            ->label('Tingkat')
                            ->required()
                            ->options([
                                'Sekolah' => 'Sekolah',
                                'Kecamatan' => 'Kecamatan',
                                'Kota/Kabupaten' => 'Kota/Kabupaten',
                                'Provinsi' => 'Provinsi',
                                'Nasional' => 'Nasional',
                                'Internasional' => 'Internasional',
                            ])
                            ->native(false),

                        TextInput::make('winner_name')
                            ->label('Nama Peraih')
                            ->placeholder('Contoh: Tim Pramuka / Ahmad Kelas 6A')
                            ->maxLength(255),

                        DatePicker::make('date')
                            ->label('Tanggal Prestasi')
                            ->native(false),

                        FileUpload::make('photo')
                            ->label('Foto (Opsional)')
                            ->image()
                            ->directory('achievements')
                            ->imageEditor()
                            ->imageResizeMode('cover')
                            ->imageCropAspectRatio('16:9')
                            ->maxSize(2048)
                            ->helperText('Maks 2MB. Disarankan rasio 16:9.')
                            ->columnSpanFull(),

                        Textarea::make('description')
                            ->label('Deskripsi')
                            ->rows(4)
                            ->maxLength(1000)
                            ->columnSpanFull(),
                    ])
                    ->columns(2),

                Section::make('Pengaturan Tampilan')
                    ->schema([
                        Toggle::make('is_active')
                            ->label('Tampilkan di Website')
                            ->default(true),

                        TextInput::make('sort_order')
                            ->label('Urutan')
                            ->numeric()
                            ->default(0)
                            ->minValue(0)
                            ->helperText('Semakin kecil, semakin di atas.'),
                    ])
                    ->columns(2),
            ]);
    }
}
