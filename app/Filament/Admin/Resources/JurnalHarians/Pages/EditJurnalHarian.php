<?php

namespace App\Filament\Admin\Resources\JurnalHarians\Pages;

use App\Filament\Admin\Resources\JurnalHarians\JurnalHarianResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditJurnalHarian extends EditRecord
{
    protected static string $resource = JurnalHarianResource::class;

    protected function mutateFormDataBeforeSave(array $data): array
    {
        $user = auth()->user();

        $teacher = $user->teacherStaff;

        $data['user_id'] = $user->id;
        $data['teacher_staff_id'] = $teacher?->id;
        $data['school_class_id'] = $teacher?->schoolClass?->id;

        return $data;
    }
    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
