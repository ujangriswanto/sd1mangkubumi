<?php

namespace App\Filament\Admin\Resources\AdministrasiGurus\Pages;

use App\Filament\Admin\Resources\AdministrasiGurus\AdministrasiGuruResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditAdministrasiGuru extends EditRecord
{
    protected static string $resource = AdministrasiGuruResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
