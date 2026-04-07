<?php

namespace App\Filament\Admin\Resources\TataTertibSekolahs\Schemas;

use Filament\Schemas\Schema;
use Filament\Schemas\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Select;

class TataTertibSekolahForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Informasi Peraturan Sekolah')
                    ->description('Input nama dan detail isi peraturan di sini.')
                    ->schema([
                        Select::make('nama_peraturan')
                        ->label('Nama Peraturan')
                        ->required()
                         ->placeholder('Pilih Nama Peraturan')
                        ->options([
                        'Tata Tertib Sekolah' => 'Tata Tertib Sekolah',
                        'Tata Tertib Siswa'   => 'Tata Tertib Siswa',
                       ])
                        ->columnSpanFull(),

                        RichEditor::make('isi_peraturan')
                            ->label('Detail Isi Peraturan')
                            ->required()
                            ->placeholder('Tuliskan poin-poin aturannya di sini...')
                            ->toolbarButtons([
                                'blockquote',
                                'bold',
                                'bulletList',
                                'h2',
                                'h3',
                                'italic',
                                'link',
                                'orderedList',
                                'redo',
                                'undo',
                            ])
                            ->columnSpanFull(),
                    ])
                    ->columns(1),
            ]);
    }
}