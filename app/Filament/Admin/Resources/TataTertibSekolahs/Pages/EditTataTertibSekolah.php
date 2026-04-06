<?php

namespace App\Filament\Admin\Resources\TataTertibSekolahs\Pages;

use App\Filament\Admin\Resources\TataTertibSekolahs\TataTertibSekolahResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditTataTertibSekolah extends EditRecord
{
    protected static string $resource = TataTertibSekolahResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
