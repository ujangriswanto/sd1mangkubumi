<?php

namespace App\Filament\Admin\Resources\PpdbRegistrations\Pages;

use App\Filament\Admin\Resources\PpdbRegistrations\PpdbRegistrationResource;
use Filament\Resources\Pages\CreateRecord;

class CreatePpdbRegistration extends CreateRecord
{
    protected static string $resource = PpdbRegistrationResource::class;

    protected function afterCreate(): void
    {
        $record = $this->record;

        // Simpan Ayah
        $record->parents()->create([
            'type' => 'father',
            'name' => $this->data['father_name'] ?? null,
            'nik' => $this->data['father_nik'] ?? null,
            'birth_year' => $this->data['father_birth_year'] ?? null,
            'education' => $this->data['father_education'] ?? null,
            'occupation' => $this->data['father_occupation'] ?? null,
            'monthly_income' => $this->data['father_income'] ?? null,
            'special_needs' => $this->data['father_special_needs'] ?? null,
        ]);

        // Simpan Ibu
        $record->parents()->create([
            'type' => 'mother',
            'name' => $this->data['mother_name'] ?? null,
            'nik' => $this->data['mother_nik'] ?? null,
            'birth_year' => $this->data['mother_birth_year'] ?? null,
            'education' => $this->data['mother_education'] ?? null,
            'occupation' => $this->data['mother_occupation'] ?? null,
            'monthly_income' => $this->data['mother_income'] ?? null,
            'special_needs' => $this->data['mother_special_needs'] ?? null,
        ]);

        // Simpan Wali (jika ada)
        if (!empty($this->data['guardian_name'])) {
            $record->wali()->create([
                'name' => $this->data['guardian_name'],
                'nik' => $this->data['guardian_nik'] ?? null,
                'birth_year' => $this->data['guardian_birth_year'] ?? null,
                'education' => $this->data['guardian_education'] ?? null,
                'occupation' => $this->data['guardian_occupation'] ?? null,
                'monthly_income' => $this->data['guardian_income'] ?? null,
            ]);
        }
    }
}
