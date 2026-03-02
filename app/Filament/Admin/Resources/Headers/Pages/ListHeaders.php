<?php

namespace App\Filament\Admin\Resources\Headers\Pages;

use App\Filament\Admin\Resources\Headers\HeaderResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListHeaders extends ListRecords
{
    protected static string $resource = HeaderResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
