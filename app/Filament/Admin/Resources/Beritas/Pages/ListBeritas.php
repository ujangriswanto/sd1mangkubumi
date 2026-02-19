<?php

namespace App\Filament\Admin\Resources\Beritas\Pages;

use App\Filament\Admin\Resources\Beritas\BeritasResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListBeritas extends ListRecords
{
    protected static string $resource = BeritasResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make()
                ->label('Tambah Berita'),
        ];
    }
}
