<?php

namespace App\Filament\Admin\Resources\Grades\Pages;

use App\Filament\Admin\Resources\Grades\GradeResource;
use Filament\Resources\Pages\CreateRecord;

class CreateGrade extends CreateRecord
{
    protected static string $resource = GradeResource::class;

    protected  function mutateFormDataBeforeCreate(array $data): array
    {
        if (auth()->user()->hasRole('guru')) {
            $data['school_class_id'] = auth()->user()?->teacherStaff?->schoolClass?->id;
        }

        return $data;
    }
}
