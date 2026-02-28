<?php

namespace App\Filament\Admin\Resources\PpdbRegistrations\Pages;

use App\Filament\Admin\Resources\PpdbRegistrations\PpdbRegistrationResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListPpdbRegistrations extends ListRecords
{
    protected static string $resource = PpdbRegistrationResource::class;

    protected function getHeaderActions(): array
    {
        return [];
    }
}
