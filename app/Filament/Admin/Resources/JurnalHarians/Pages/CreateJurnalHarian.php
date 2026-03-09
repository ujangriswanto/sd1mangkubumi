<?php

namespace App\Filament\Admin\Resources\JurnalHarians\Pages;

use App\Filament\Admin\Resources\JurnalHarians\JurnalHarianResource;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Facades\Auth;

class CreateJurnalHarian extends CreateRecord
{
    protected static string $resource = JurnalHarianResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $user = Auth::user();

        $teacher = $user->teacherStaff;

        $data['user_id'] = $user->id;
        $data['teacher_staff_id'] = $teacher?->id;
        $data['school_class_id'] = $teacher?->schoolClass?->id;

        return $data;
    }
}
