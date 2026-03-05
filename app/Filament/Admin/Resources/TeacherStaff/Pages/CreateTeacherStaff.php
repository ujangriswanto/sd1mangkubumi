<?php

namespace App\Filament\Admin\Resources\TeacherStaff\Pages;

use App\Filament\Admin\Resources\TeacherStaff\TeacherStaffResource;
use Filament\Resources\Pages\CreateRecord;

class CreateTeacherStaff extends CreateRecord
{
    protected static string $resource = TeacherStaffResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}