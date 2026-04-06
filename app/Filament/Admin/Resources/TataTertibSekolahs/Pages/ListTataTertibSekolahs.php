<?php

namespace App\Filament\Admin\Resources\TataTertibSekolahs\Pages;

use App\Filament\Admin\Resources\TataTertibSekolahs\TataTertibSekolahResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListTataTertibSekolahs extends ListRecords
{
    protected static string $resource = TataTertibSekolahResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
