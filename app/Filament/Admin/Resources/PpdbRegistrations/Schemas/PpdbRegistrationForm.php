<?php

namespace App\Filament\Admin\Resources\PpdbRegistrations\Schemas;

use Filament\Schemas\Schema;
use Filament\Schemas\Components\Section;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\FileUpload;

class PpdbRegistrationForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Data Calon Murid')
                    ->schema([
                        TextInput::make('student_name')
                            ->label('Nama Calon Murid')
                            ->required()
                            ->maxLength(255),

                        Select::make('gender')
                            ->label('Jenis Kelamin')
                            ->required()
                            ->options([
                                'L' => 'Laki-laki',
                                'P' => 'Perempuan',
                            ])
                            ->native(false),

                        TextInput::make('nisn')
                            ->label('NISN')
                            ->maxLength(20),

                        TextInput::make('nik')
                            ->label('NIK / No KITAS')
                            ->maxLength(30),

                        TextInput::make('no_kk')
                            ->label('No KK'),

                        DatePicker::make('birth_date')
                            ->label('Tanggal Lahir')
                            ->native(false),

                        TextInput::make('no_akta_lahir')
                            ->label('No Registrasi Akta Lahir'),

                        Select::make('religion')
                            ->options([
                                'islam' => 'Islam',
                                'kristen' => 'Kristen',
                                'katolik' => 'Katolik',
                                'hindu' => 'Hindu',
                                'budha' => 'Budha',
                                'konghucu' => 'Konghucu',
                            ])
                            ->native(false),

                        Select::make('citizenship')
                            ->options([
                                'wni' => 'WNI',
                                'wna' => 'WNA',
                            ])
                            ->native(false),

                        TextInput::make('special_needs')
                            ->label('Berkebutuhan Khusus'),

                        TextInput::make('residence_type')
                            ->label('Tempat Tinggal'),

                        TextInput::make('transportation')
                            ->label('Moda Transportasi'),

                        TextInput::make('child_order')
                            ->numeric()
                            ->label('Anak Keberapa'),

                        Toggle::make('has_kip')
                            ->label('Memiliki KIP')
                            ->helperText('Centang jika calon murid memiliki Kartu Indonesia Pintar (KIP)'),

                        FileUpload::make('kk_file')
                            ->label('Upload Kartu Keluarga (KK)')
                            ->disk('public')
                            ->directory('ppdb/documents/kk')
                            ->acceptedFileTypes(['application/pdf','image/jpeg','image/png'])
                            ->maxSize(4096)
                            ->required()
                            ->preserveFilenames()
                            ->dehydrateStateUsing(function ($state) {
                                if (is_array($state)) {
                                    return array_values($state)[0] ?? null;
                                }
                                return $state;
                            })
                            ->dehydrated(true),

                        FileUpload::make('kip_file')
                            ->label('Upload Kartu Indonesia Pintar (KIP)')
                            ->disk('public')
                            ->directory('ppdb/documents/kip')
                            ->acceptedFileTypes(['application/pdf','image/jpeg','image/png'])
                            ->maxSize(4096)
                            ->helperText('Wajib jika memiliki KIP')
                            ->preserveFilenames()
                            ->dehydrateStateUsing(function ($state) {
                                if (is_array($state)) {
                                    return array_values($state)[0] ?? null;
                                }
                                return $state;
                            })
                            ->dehydrated(true)
                            ->visible(fn ($get) => $get('has_kip'))
                            ->required(fn ($get) => $get('has_kip')),

                        Toggle::make('will_receive_kip')
                            ->label('Tetap Akan Menerima KIP')
                            ->helperText('Centang jika calon murid tetap akan menerima KIP meskipun tidak memiliki KIP saat ini'),

                        Select::make('kip_reject_reason')
                            ->label('Alasan Menolak KIP')
                            ->options([
                                'dilarang_pemda' => 'Dilarang Pemda karena menerima bantuan serupa',
                                'menolak' => 'Menolak karena tidak membutuhkan bantuan',
                                'sudah_mampu' => 'Sudah mampu',
                            ])
                            ->visible(fn ($get) => $get('will_receive_kip') === false),

                        TextInput::make('phone')
                            ->label('No Telepon')
                            ->maxLength(20),
                        
                        Textarea::make('address')
                            ->label('Alamat Lengkap')
                            ->rows(3)
                            ->columnSpanFull(),
                    ])
                    ->columns(3),

                Section::make('Data Ayah Kandung')
                    ->schema([
                        TextInput::make('father_name')
                            ->label('Nama Ayah Kandung'),
                        TextInput::make('father_nik')
                            ->label('NIK Ayah Kandung'),
                        TextInput::make('father_birth_year')
                            ->label('Tahun Lahir Ayah Kandung'),
                        TextInput::make('father_education')
                            ->label('Pendidikan Ayah Kandung'),
                        TextInput::make('father_occupation')
                            ->label('Pekerjaan Ayah Kandung'),
                        TextInput::make('father_income')
                            ->label('Penghasilan Ayah Kandung'),
                        TextInput::make('father_special_needs'),
                    ])
                    ->columns(3),

                Section::make('Data Ibu Kandung')
                    ->schema([
                        TextInput::make('mother_name')
                            ->label('Nama Ibu Kandung'),
                        TextInput::make('mother_nik')
                            ->label('NIK Ibu Kandung'),
                        TextInput::make('mother_birth_year')
                            ->label('Tahun Lahir Ibu Kandung'),
                        TextInput::make('mother_education')
                            ->label('Pendidikan Ibu Kandung'),
                        TextInput::make('mother_occupation')
                            ->label('Pekerjaan Ibu Kandung'),
                        TextInput::make('mother_income')
                            ->label('Penghasilan Ibu Kandung'),
                        TextInput::make('mother_special_needs'),
                    ])
                    ->columns(3),

                Section::make('Data Wali')
                    ->schema([
                        TextInput::make('guardian_name')
                            ->label('Nama Wali'),
                        TextInput::make('guardian_nik')
                            ->label('NIK Wali'),
                        TextInput::make('guardian_birth_year')
                            ->label('Tahun Lahir Wali'),
                        TextInput::make('guardian_education')
                            ->label('Pendidikan Wali'),
                        TextInput::make('guardian_occupation')
                            ->label('Pekerjaan Wali'),
                        TextInput::make('guardian_income')
                            ->label('Penghasilan Wali'),
                    ])
                    ->columns(3),

                Section::make('Status')
                    ->schema([
                        Select::make('status')
                            ->label('Status')
                            ->required()
                            ->options([
                                'pending' => 'Pending',
                                'accepted' => 'Diterima',
                                'rejected' => 'Ditolak',
                            ])
                            ->native(false)
                            ->default('pending'),

                        Textarea::make('admin_note')
                            ->label('Catatan Admin')
                            ->rows(3)
                            ->columnSpanFull(),
                    ])
                    ->columns(2),
            ])
            ->statePath('data');
    }
}
