<?php

namespace App\Filament\Admin\Resources\PpdbRegistrations\Pages;

use App\Filament\Admin\Resources\PpdbRegistrations\PpdbRegistrationResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditPpdbRegistration extends EditRecord
{
    protected static string $resource = PpdbRegistrationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }

    protected function afterSave(): void
    {
        $record = $this->record;

        // Update atau buat ayah
        $record->parents()->updateOrCreate(
            ['type' => 'father'],
            [
                'name' => $this->data['father_name'] ?? null,
                'nik' => $this->data['father_nik'] ?? null,
                'birth_year' => $this->data['father_birth_year'] ?? null,
                'education' => $this->data['father_education'] ?? null,
                'occupation' => $this->data['father_occupation'] ?? null,
                'monthly_income' => $this->data['father_income'] ?? null,
                'special_needs' => $this->data['father_special_needs'] ?? null,
            ]
        );

        $record->parents()->updateOrCreate(
            ['type' => 'mother'],
            [
                'name' => $this->data['mother_name'] ?? null,
                'nik' => $this->data['mother_nik'] ?? null,
                'birth_year' => $this->data['mother_birth_year'] ?? null,
                'education' => $this->data['mother_education'] ?? null,
                'occupation' => $this->data['mother_occupation'] ?? null,
                'monthly_income' => $this->data['mother_income'] ?? null,
                'special_needs' => $this->data['mother_special_needs'] ?? null,
            ]
        );

        if (!empty($this->data['guardian_name'])) {
            $record->wali()->updateOrCreate(
                [],
                [
                    'name' => $this->data['guardian_name'],
                    'nik' => $this->data['guardian_nik'] ?? null,
                    'birth_year' => $this->data['guardian_birth_year'] ?? null,
                    'education' => $this->data['guardian_education'] ?? null,
                    'occupation' => $this->data['guardian_occupation'] ?? null,
                    'monthly_income' => $this->data['guardian_income'] ?? null,
                ]
            );
        }
    }

    protected function mutateFormDataBeforeFill(array $data): array
    {
        $record = $this->record;

        // Ambil ayah
        $father = $record->parents()->where('type', 'father')->first();
        $mother = $record->parents()->where('type', 'mother')->first();
        $guardian = $record->wali;

        if ($father) {
            $data['father_name'] = $father->name;
            $data['father_nik'] = $father->nik;
            $data['father_birth_year'] = $father->birth_year;
            $data['father_education'] = $father->education;
            $data['father_occupation'] = $father->occupation;
            $data['father_income'] = $father->monthly_income;
            $data['father_special_needs'] = $father->special_needs;
        }

        if ($mother) {
            $data['mother_name'] = $mother->name;
            $data['mother_nik'] = $mother->nik;
            $data['mother_birth_year'] = $mother->birth_year;
            $data['mother_education'] = $mother->education;
            $data['mother_occupation'] = $mother->occupation;
            $data['mother_income'] = $mother->monthly_income;
            $data['mother_special_needs'] = $mother->special_needs;
        }

        if ($guardian) {
            $data['guardian_name'] = $guardian->name;
            $data['guardian_nik'] = $guardian->nik;
            $data['guardian_birth_year'] = $guardian->birth_year;
            $data['guardian_education'] = $guardian->education;
            $data['guardian_occupation'] = $guardian->occupation;
            $data['guardian_income'] = $guardian->monthly_income;
        }

        return $data;
    }
}
