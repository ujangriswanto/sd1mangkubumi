<?php

namespace App\Filament\Admin\Pages;

use App\Models\ProfilSekolah as SchoolProfileModel;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Support\Exceptions\Halt;
use Filament\Notifications\Notification;
use Filament\Pages\Page;
use BackedEnum;
use UnitEnum;

class ProfilSekolah extends Page
{
    protected static string|BackedEnum|null $navigationIcon = 'heroicon-o-building-library';

    protected static UnitEnum|string|null $navigationGroup = 'Profil Sekolah';

    protected static ?string $navigationLabel = 'Tentang Sekolah';

    protected static ?int $navigationSort = 1;

    protected string $view = 'filament.admin.pages.profil-sekolah';

    public ?array $data = [];

    public function mount(): void
    {
        $profile = SchoolProfileModel::firstOrCreate([]);

        $this->data = [
            'school_name' => $profile->school_name,
            'logo' => $profile->logo,
            'headmaster_name' => $profile->headmaster_name,
            'headmaster_photo' => $profile->headmaster_photo,
            'history' => $profile->history,
            'vision' => $profile->vision,
            'mission' => $profile->mission,
        ];
    }

    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Identitas Sekolah')
                    ->schema([
                        TextInput::make('school_name')
                            ->label('Nama Sekolah')
                            ->maxLength(255),

                        FileUpload::make('logo')
                            ->label('Logo Sekolah')
                            ->image()
                            ->directory('school')
                            ->imageEditor()
                            ->maxSize(2048),

                        TextInput::make('headmaster_name')
                            ->label('Nama Kepala Sekolah')
                            ->maxLength(255),

                        FileUpload::make('headmaster_photo')
                            ->label('Foto Kepala Sekolah')
                            ->image()
                            ->directory('school')
                            ->imageEditor()
                            ->imageResizeMode('cover')
                            ->imageCropAspectRatio('1:1')
                            ->maxSize(2048),
                    ])
                    ->columns(2),

                Section::make('Profil Sekolah')
                    ->schema([
                        RichEditor::make('history')
                            ->label('Sejarah Sekolah')
                            ->columnSpanFull(),

                        RichEditor::make('vision')
                            ->label('Visi')
                            ->columnSpanFull(),

                        RichEditor::make('mission')
                            ->label('Misi')
                            ->columnSpanFull(),
                    ])
                    ->columns(1),
            ])
            ->statePath('data');
    }

    public function save(): void
    {
        $profile = SchoolProfileModel::firstOrCreate([]);

        $profile->update($this->data);

        Notification::make()
            ->title('Profil sekolah berhasil disimpan')
            ->success()
            ->send();
    }

    protected function getHeaderActions(): array
    {
        return [];
    }
}
