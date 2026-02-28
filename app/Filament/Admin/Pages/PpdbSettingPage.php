<?php

namespace App\Filament\Admin\Pages;

use App\Models\PpdbSetting;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Notifications\Notification;
use Filament\Pages\Page;
use Illuminate\Support\Facades\Storage;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;
use BackedEnum;
use UnitEnum;

class PpdbSettingPage extends Page
{
    protected static string|BackedEnum|null $navigationIcon = 'heroicon-o-clipboard-document-check';
    protected static UnitEnum|string|null $navigationGroup = 'PPDB';
    protected static ?string $navigationLabel = 'Info PPDB';
    protected static ?int $navigationSort = 1;

    protected string $view = 'filament.admin.pages.ppdb-setting-page';

    public ?array $data = [];

    public function mount(): void
    {
        $ppdb = PpdbSetting::firstOrCreate([]);

        $this->data = [
            'is_open'           => $ppdb->is_open,
            'start_date'        => $ppdb->start_date,
            'end_date'          => $ppdb->end_date,
            // Wrap path lama ke array agar FileUpload bisa tampilkan preview
            'requirements'      => $ppdb->requirements ? [$ppdb->requirements => $ppdb->requirements] : [],
            'flow'              => $ppdb->flow ? [$ppdb->flow => $ppdb->flow] : [],
            'brochure'          => $ppdb->brochure ? [$ppdb->brochure => $ppdb->brochure] : [],
            'registration_link' => $ppdb->registration_link,
        ];
    }

    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Status PPDB')
                    ->schema([
                        Toggle::make('is_open')
                            ->label('PPDB Dibuka'),

                        DatePicker::make('start_date')
                            ->label('Tanggal Mulai')
                            ->native(false),

                        DatePicker::make('end_date')
                            ->label('Tanggal Selesai')
                            ->native(false),
                    ])
                    ->columns(3),

                Section::make('Informasi PPDB')
                    ->schema([
                        FileUpload::make('requirements')
                            ->label('File Persyaratan (PDF)')
                            ->disk('public')
                            ->directory('ppdb')
                            ->acceptedFileTypes(['application/pdf'])
                            ->maxSize(4096)
                            ->preserveFilenames()
                            ->downloadable()
                            ->openable(),

                        FileUpload::make('flow')
                            ->label('File Alur Pendaftaran (PDF)')
                            ->disk('public')
                            ->directory('ppdb')
                            ->acceptedFileTypes(['application/pdf'])
                            ->maxSize(4096)
                            ->preserveFilenames()
                            ->downloadable()
                            ->openable(),
                    ])
                    ->columns(1),

                Section::make('Brosur & Link')
                    ->schema([
                        FileUpload::make('brochure')
                            ->label('Brosur (PDF)')
                            ->disk('public')
                            ->directory('ppdb')
                            ->acceptedFileTypes(['application/pdf'])
                            ->maxSize(4096)
                            ->preserveFilenames()
                            ->downloadable()
                            ->openable(),

                        TextInput::make('registration_link')
                            ->label('Link Pendaftaran (Opsional)')
                            ->maxLength(500),
                    ])
                    ->columns(1),
            ])
            ->statePath('data');
    }

    public function save(): void
    {
        $ppdb = PpdbSetting::firstOrCreate([]);

        $formData = $this->data;

        $ppdb->update([
            'is_open'           => $formData['is_open'] ?? false,
            'start_date'        => $formData['start_date'] ?? null,
            'end_date'          => $formData['end_date'] ?? null,
            'requirements'      => $this->handleFileUpload($formData['requirements'] ?? [], $ppdb->requirements),
            'flow'              => $this->handleFileUpload($formData['flow'] ?? [], $ppdb->flow),
            'brochure'          => $this->handleFileUpload($formData['brochure'] ?? [], $ppdb->brochure),
            'registration_link' => $formData['registration_link'] ?? null,
        ]);

        Notification::make()
            ->title('Info PPDB berhasil disimpan')
            ->success()
            ->send();
    }

    /**
     * Handle file upload dari Filament v4 / Livewire.
     *
     * Dari dd() kita tahu format state-nya:
     * - [] kosong → tidak ada file
     * - ['uuid-random' => TemporaryUploadedFile] → file BARU yang baru diupload
     * - ['ppdb/file.pdf' => 'ppdb/file.pdf'] → file LAMA yang sudah di storage
     */
    private function handleFileUpload(array $state, ?string $existingPath): ?string
    {
        // Tidak ada file
        if (empty($state)) {
            return $existingPath;
        }

        $firstValue = array_values($state)[0];

        // ── FILE BARU: TemporaryUploadedFile dari Livewire ──
        if ($firstValue instanceof TemporaryUploadedFile) {
            // Ambil nama file asli dari client
            $originalName = $firstValue->getClientOriginalName();

            // Store ke disk public, folder ppdb, dengan nama file asli
            $storedPath = $firstValue->storeAs('ppdb', $originalName, 'public');

            // Hapus file lama jika ada
            if ($existingPath && Storage::disk('public')->exists($existingPath)) {
                Storage::disk('public')->delete($existingPath);
            }

            // Return path relatif: "ppdb/namafile.pdf"
            return $storedPath;
        }

        // ── FILE LAMA: string path dari storage ──
        if (is_string($firstValue)) {
            return $firstValue;
        }

        return $existingPath;
    }
}