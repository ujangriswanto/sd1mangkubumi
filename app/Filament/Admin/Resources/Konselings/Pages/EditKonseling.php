<?php

namespace App\Filament\Admin\Resources\Konselings\Pages;

use App\Filament\Admin\Resources\Konselings\KonselingResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditKonseling extends EditRecord
{
    protected static string $resource = KonselingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
