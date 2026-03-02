<?php

namespace App\Filament\Admin\Resources\Headers\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Toggle;

class HeaderForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nama_foto')
                            ->label('Nama Foto')
                            ->maxLength(20),
                FileUpload::make('header_foto')
                            ->label('Thumbnail')
                            ->image()
                            ->directory('news')
                            ->disk('public')
                            ->imageEditor()
                            ->maxSize(2048)
                            ->helperText('Upload gambar thumbnail . Maks 2MB.'),
                Toggle::make('show_header')
                            ->label('Tampilkan Header / Thumbnail')
                            ->helperText('Aktifkan untuk menampilkan gambar thumbnail di halaman berita.')
                            ->default(true)
                            ->inline(false),
            ]);
    }
}
