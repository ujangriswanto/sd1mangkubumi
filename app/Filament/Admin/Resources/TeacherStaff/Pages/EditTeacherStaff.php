<?php

namespace App\Filament\Admin\Resources\TeacherStaff\Pages;

use App\Filament\Admin\Resources\TeacherStaff\TeacherStaffResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditTeacherStaff extends EditRecord
{
    protected static string $resource = TeacherStaffResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
