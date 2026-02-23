<?php

namespace App\Filament\Admin\Resources\Beritas\Schemas;

use Filament\Schemas\Schema;
use Filament\Schemas\Components\Section;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Illuminate\Support\Str;
use Filament\Forms\Components\Select;

class BeritasForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Konten Berita')
                    ->schema([
                        TextInput::make('title')
                            ->label('Judul')
                            ->required()
                            ->maxLength(255)
                            ->live(onBlur: true)
                            ->afterStateUpdated(function (string $state, callable $set, callable $get) {
                                // Auto-generate slug kalau slug masih kosong
                                if (filled($get('slug'))) {
                                    return;
                                }

                                $set('slug', Str::slug($state));
                            }),

                        TextInput::make('slug')
                            ->label('Slug')
                            ->required()
                            ->maxLength(255)
                            ->unique(ignoreRecord: true)
                            ->helperText('Slug untuk URL berita. Contoh: kegiatan-pramuka-2026'),

                        FileUpload::make('thumbnail')
                            ->label('Thumbnail')
                            ->image()
                            ->directory('news')
                            ->imageEditor()
                            ->imageResizeMode('cover')
                            ->imageCropAspectRatio('16:9')
                            ->maxSize(2048)
                            ->helperText('Upload gambar thumbnail (disarankan 16:9). Maks 2MB.'),

                        RichEditor::make('content')
                            ->label('Isi Berita')
                            ->required()
                            ->columnSpanFull(),
                        Select::make('category')
                            ->label('Kategori')
                            ->options([
                            'ekstrakulikuler' => 'Ekstrakulikuler',
                            'kegiatan' => 'Kegiatan',
                            'berita' => 'Berita',
                            'olahraga' => 'Olahraga',
                            'lomba' => 'Lomba',
                            ])
                            ->searchable()
                             ->required()

                        
                    ])
                    ->columns(2),

                Section::make('Status Publikasi')
                    ->schema([
                        Toggle::make('is_published')
                            ->label('Publish')
                            ->default(false)
                            ->live()
                            ->helperText('Jika OFF, berita dianggap draft dan tidak tampil di website.'),

                        DateTimePicker::make('published_at')
                            ->label('Tanggal Publish')
                            ->seconds(false)
                            ->helperText('Jika kosong, bisa diisi nanti.')
                            ->visible(fn (callable $get) => $get('is_published') === true),
                    ])
                    ->columns(2),
            ]);
    }
}
