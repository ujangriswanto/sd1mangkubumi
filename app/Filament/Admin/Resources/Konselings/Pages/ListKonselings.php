<?php

namespace App\Filament\Admin\Resources\Konselings\Pages;

use App\Filament\Admin\Resources\Konselings\KonselingResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListKonselings extends ListRecords
{
    protected static string $resource = KonselingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
