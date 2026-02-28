<?php

namespace App\Filament\Admin\Resources\Students\Schemas;

use Filament\Schemas\Schema;
use Filament\Schemas\Components\Section;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\FileUpload;

class StudentForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                /*
                |--------------------------------------------------------------------------
                | DATA UTAMA
                |--------------------------------------------------------------------------
                */

                Section::make('Data Utama')
                    ->schema([

                        Section::make('Identitas Siswa')
                            ->schema([
                                TextInput::make('nis')
                                    ->label('NIS')
                                    ->unique(ignoreRecord: true),

                                TextInput::make('nisn')
                                    ->label('NISN'),

                                TextInput::make('name')
                                    ->label('Nama Siswa')
                                    ->required(),

                                TextInput::make('nik')
                                    ->label('NIK'),

                                TextInput::make('no_kk')
                                    ->label('No KK'),

                                TextInput::make('no_akta_lahir')
                                    ->label('No Registrasi Akta Lahir'),

                                Select::make('gender')
                                    ->label('Jenis Kelamin')
                                    ->options([
                                        'L' => 'Laki-laki',
                                        'P' => 'Perempuan',
                                    ])
                                    ->required(),

                                DatePicker::make('birth_date')
                                    ->label('Tanggal Lahir'),

                                Select::make('religion')
                                    ->label('Agama')
                                    ->options([
                                        'islam' => 'Islam',
                                        'kristen' => 'Kristen',
                                        'katolik' => 'Katolik',
                                        'hindu' => 'Hindu',
                                        'budha' => 'Budha',
                                        'konghucu' => 'Konghucu',
                                    ]),

                                Select::make('citizenship')
                                    ->label('Kewarganegaraan')
                                    ->options([
                                        'wni' => 'WNI',
                                        'wna' => 'WNA',
                                    ]),

                                TextInput::make('special_needs')
                                    ->label('Berkebutuhan Khusus'),

                                TextInput::make('residence_type')
                                    ->label('Tempat Tinggal'),

                                TextInput::make('transportation')
                                    ->label('Moda Transportasi'),

                                TextInput::make('child_order')
                                    ->numeric()
                                    ->label('Anak Keberapa'),

                                Select::make('school_class_id')
                                    ->label('Kelas')
                                    ->relationship('schoolClass', 'name')
                                    ->searchable()
                                    ->preload()
                                    ->required(),

                                Toggle::make('is_active')
                                    ->label('Siswa Aktif')
                                    ->default(true),
                            ])
                            ->columns(3),

                        Section::make('Kontak & Bantuan Sosial')
                            ->schema([
                                TextInput::make('phone')
                                    ->label('No Telepon'),

                                Textarea::make('address')
                                    ->label('Alamat')
                                    ->rows(3)
                                    ->columnSpanFull(),

                                Toggle::make('has_kip')
                                    ->label('Memiliki KIP'),

                                Toggle::make('will_receive_kip')
                                    ->label('Tetap Akan Menerima KIP'),

                                Select::make('kip_reject_reason')
                                    ->label('Alasan Menolak KIP')
                                    ->options([
                                        'dilarang_pemda' => 'Dilarang Pemda',
                                        'menolak' => 'Menolak',
                                        'sudah_mampu' => 'Sudah Mampu',
                                    ])
                                    ->visible(fn ($get) => $get('will_receive_kip') === false),

                                FileUpload::make('kk_file')
                                    ->label('File KK')
                                    ->disk('public')
                                    ->directory('students/documents')
                                    ->preserveFilenames()
                                    ->downloadable(),

                                FileUpload::make('kip_file')
                                    ->label('File KIP')
                                    ->disk('public')
                                    ->directory('students/documents')
                                    ->preserveFilenames()
                                    ->downloadable(),
                            ])
                            ->columns(2),
                    ]),

                /*
                |--------------------------------------------------------------------------
                | DATA ORANG TUA
                |--------------------------------------------------------------------------
                */

                Section::make('Data Orang Tua')
                    ->schema([
                        Repeater::make('parents')
                            ->relationship()
                            ->schema([
                                Select::make('type')
                                    ->options([
                                        'father' => 'Ayah',
                                        'mother' => 'Ibu',
                                    ])
                                    ->required(),

                                TextInput::make('name')->label('Nama'),
                                TextInput::make('nik')->label('NIK'),
                                TextInput::make('birth_year')->numeric(),
                                TextInput::make('education'),
                                TextInput::make('occupation'),
                                TextInput::make('monthly_income')->label('Penghasilan'),
                                TextInput::make('special_needs')->label('Berkebutuhan Khusus'),
                            ])
                            ->columns(3)
                            ->defaultItems(2),
                    ]),

                /*
                |--------------------------------------------------------------------------
                | DATA WALI
                |--------------------------------------------------------------------------
                */

                Section::make('Data Wali')
                    ->relationship('wali')
                    ->schema([
                        TextInput::make('name')->label('Nama Wali'),
                        TextInput::make('nik')->label('NIK Wali'),
                        TextInput::make('birth_year')->numeric(),
                        TextInput::make('education'),
                        TextInput::make('occupation'),
                        TextInput::make('monthly_income')->label('Penghasilan'),
                    ])
                    ->columns(3),

                /*
                |--------------------------------------------------------------------------
                | DATA PERIODIK
                |--------------------------------------------------------------------------
                */

                Section::make('Data Periodik')
                    ->relationship('periodic')
                    ->schema([
                        TextInput::make('height')->numeric(),
                        TextInput::make('weight')->numeric(),
                        TextInput::make('head_circumference')->numeric(),
                        TextInput::make('distance_to_school')->numeric(),
                        TextInput::make('travel_time')->numeric(),
                        TextInput::make('siblings_count')->numeric(),
                    ])
                    ->columns(3),

                /*
                |--------------------------------------------------------------------------
                | PRESTASI
                |--------------------------------------------------------------------------
                */

                Section::make('Prestasi')
                    ->schema([
                        Repeater::make('achievements')
                            ->relationship()
                            ->schema([
                                Select::make('type')->options([
                                    'sains' => 'Sains',
                                    'seni' => 'Seni',
                                    'olahraga' => 'Olahraga',
                                    'lainnya' => 'Lainnya',
                                ]),

                                Select::make('level')->options([
                                    'sekolah' => 'Sekolah',
                                    'kecamatan' => 'Kecamatan',
                                    'kabupaten' => 'Kabupaten',
                                    'provinsi' => 'Provinsi',
                                    'nasional' => 'Nasional',
                                    'internasional' => 'Internasional',
                                ]),

                                TextInput::make('name'),
                                TextInput::make('year')->numeric(),
                                TextInput::make('organizer'),
                            ])
                            ->columns(2),
                    ]),

                /*
                |--------------------------------------------------------------------------
                | BEASISWA
                |--------------------------------------------------------------------------
                */

                Section::make('Beasiswa')
                    ->schema([
                        Repeater::make('scholarships')
                            ->relationship()
                            ->schema([
                                Select::make('type')->options([
                                    'anak_berprestasi' => 'Anak Berprestasi',
                                    'anak_miskin' => 'Anak Miskin',
                                    'pendidikan' => 'Pendidikan',
                                    'unggulan' => 'Unggulan',
                                ]),

                                Textarea::make('description')->columnSpanFull(),
                                TextInput::make('start_year')->numeric(),
                                TextInput::make('end_year')->numeric(),
                            ])
                            ->columns(2),
                    ]),

                /*
                |--------------------------------------------------------------------------
                | KESEJAHTERAAN
                |--------------------------------------------------------------------------
                */

                Section::make('Kesejahteraan')
                    ->schema([
                        Repeater::make('welfares')
                            ->relationship()
                            ->schema([
                                Select::make('type')->options([
                                    'PKH' => 'PKH',
                                    'PIP' => 'PIP',
                                    'KPS' => 'Kartu Perlindungan Sosial',
                                    'KKS' => 'Kartu Keluarga Sejahtera',
                                    'Kartu_Kesehatan' => 'Kartu Kesehatan',
                                ]),
                                TextInput::make('card_number'),
                                TextInput::make('card_name'),
                            ])
                            ->columns(2),
                    ]),

                /*
                |--------------------------------------------------------------------------
                | KELUAR
                |--------------------------------------------------------------------------
                */

                Section::make('Keluar')
                    ->relationship('exit')
                    ->schema([
                        Select::make('reason')->options([
                            'mutasi' => 'Mutasi',
                            'dikeluarkan' => 'Dikeluarkan',
                            'mengundurkan_diri' => 'Mengundurkan Diri',
                            'putus_sekolah' => 'Putus Sekolah',
                            'wafat' => 'Wafat',
                            'hilang' => 'Hilang',
                        ]),
                        DatePicker::make('exit_date'),
                        Textarea::make('description')->columnSpanFull(),
                    ])
                    ->columns(2),

            ])
            ->statePath('data');
    }
}