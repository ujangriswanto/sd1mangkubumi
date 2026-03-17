<?php

namespace App\Filament\Admin\Resources\AdministrasiKepseks\Pages;

use App\Filament\Admin\Resources\AdministrasiKepseks\AdministrasiKepsekResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditAdministrasiKepsek extends EditRecord
{
    protected static string $resource = AdministrasiKepsekResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
