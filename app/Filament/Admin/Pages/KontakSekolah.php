<?php

namespace App\Filament\Admin\Pages;

use App\Models\Contact;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Notifications\Notification;
use Filament\Pages\Page;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use BackedEnum;
use UnitEnum;

class KontakSekolah extends Page
{
    protected static string|BackedEnum|null $navigationIcon = 'heroicon-o-phone';

    protected static UnitEnum|string|null $navigationGroup = 'Profil Sekolah';

    protected static ?string $navigationLabel = 'Kontak';

    protected static ?int $navigationSort = 2;

    protected string $view = 'filament.admin.pages.kontak-sekolah';

    public ?array $data = [];

    public function mount(): void
    {
        $contact = Contact::firstOrCreate([]);

        $this->data = [
            'address' => $contact->address,
            'phone' => $contact->phone,
            'email' => $contact->email,
            'whatsapp' => $contact->whatsapp,
            'google_maps_link' => $contact->google_maps_link,
            'instagram' => $contact->instagram,
            'facebook' => $contact->facebook,
            'youtube' => $contact->youtube,
            'working_hours' => $contact->working_hours,
        ];
    }

    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Kontak Utama')
                    ->schema([
                        Textarea::make('address')
                            ->label('Alamat Sekolah')
                            ->rows(3)
                            ->columnSpanFull(),

                        TextInput::make('phone')
                            ->label('Nomor Telepon')
                            ->maxLength(50)
                            ->placeholder('Contoh: 021-123456'),

                        TextInput::make('email')
                            ->label('Email')
                            ->email()
                            ->maxLength(255)
                            ->placeholder('contoh@sekolah.sch.id'),

                        TextInput::make('whatsapp')
                            ->label('Nomor WhatsApp')
                            ->maxLength(50)
                            ->placeholder('Contoh: 62812xxxxxxx'),

                        TextInput::make('working_hours')
                            ->label('Jam Operasional')
                            ->maxLength(255)
                            ->placeholder('Contoh: Senin–Jumat 07:00–14:00'),
                    ])
                    ->columns(2),

                Section::make('Google Maps')
                    ->schema([
                        TextInput::make('google_maps_link')
                            ->label('Link Google Maps')
                            ->maxLength(500)
                            ->placeholder('Tempel link dari Google Maps')
                            ->columnSpanFull(),
                    ]),

                Section::make('Media Sosial')
                    ->schema([
                        TextInput::make('instagram')
                            ->label('Instagram')
                            ->maxLength(255)
                            ->placeholder('https://instagram.com/...'),

                        TextInput::make('facebook')
                            ->label('Facebook')
                            ->maxLength(255)
                            ->placeholder('https://facebook.com/...'),

                        TextInput::make('youtube')
                            ->label('YouTube')
                            ->maxLength(255)
                            ->placeholder('https://youtube.com/...'),
                    ])
                    ->columns(2),
            ])
            ->statePath('data');
    }

    public function save(): void
    {
        $contact = Contact::firstOrCreate([]);

        $contact->update($this->data);

        Notification::make()
            ->title('Kontak berhasil disimpan')
            ->success()
            ->send();
    }
}
