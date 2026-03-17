<?php

namespace App\Filament\Admin\Resources\JurnalHarians\Pages;

use App\Filament\Admin\Resources\JurnalHarians\JurnalHarianResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListJurnalHarians extends ListRecords
{
    protected static string $resource = JurnalHarianResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make()
                ->label('Tambah Jurnal Harian'),
        ];
    }
}
