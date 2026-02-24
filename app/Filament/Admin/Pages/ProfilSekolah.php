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
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Concerns\InteractsWithForms;

class ProfilSekolah extends Page implements HasForms
{
    use InteractsWithForms;

    protected static string|BackedEnum|null $navigationIcon = 'heroicon-o-building-library';

    protected static UnitEnum|string|null $navigationGroup = 'Profil Sekolah';

    protected static ?string $navigationLabel = 'Tentang Sekolah';

    protected static ?int $navigationSort = 1;

    protected string $view = 'filament.admin.pages.profil-sekolah';

    public ?array $data = [];

    public function mount(): void
    {
        $profile = SchoolProfileModel::firstOrCreate([]);

        $this->form->fill([
        'school_name' => $profile->school_name,
        'logo' => $profile->logo,
        'headmaster_name' => $profile->headmaster_name,
        'headmaster_photo' => $profile->headmaster_photo,
        'headmaster_nip' => $profile->headmaster_nip,
        'headmaster_quote' => $profile->headmaster_quote,
        'history' => $profile->history,
        'vision' => $profile->vision,
        'mission' => $profile->mission,
    ]);
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
                            ->disk('public')
                            ->imageEditor()
                            ->maxSize(2048)
                            ->preserveFilenames()
                            ->storeFileNamesIn('logo'),

                        TextInput::make('headmaster_name')
                            ->label('Nama Kepala Sekolah')
                            ->maxLength(255),

                        FileUpload::make('headmaster_photo')
                            ->label('Foto Kepala Sekolah')
                            ->image()
                            ->directory('school/headmaster')
                            ->disk('public')
                            ->imageEditor()
                            ->imageResizeMode('crop')
                            ->imageCropAspectRatio('1:1')
                            ->maxSize(2048),
                        
                        TextInput::make('headmaster_nip')
                            ->label('NIP Kepala Sekolah')
                            ->maxLength(18)
                            ->helperText('Masukkan NIP dengan benar, maksimal 18 karakter.'),

                        TextInput::make('headmaster_quote')
                            ->label('Kutipan Kepala Sekolah')
                            ->maxLength(255)
                            ->helperText('Masukkan kutipan inspiratif dari kepala sekolah.'),
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

        $data = $this->form->getState();

        $profile->update($data);

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
