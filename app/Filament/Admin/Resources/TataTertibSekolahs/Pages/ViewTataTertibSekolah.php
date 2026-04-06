<?php

namespace App\Filament\Admin\Resources\TataTertibSekolahs\Pages;

use App\Filament\Admin\Resources\TataTertibSekolahs\TataTertibSekolahResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewTataTertibSekolah extends ViewRecord
{
    protected static string $resource = TataTertibSekolahResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
