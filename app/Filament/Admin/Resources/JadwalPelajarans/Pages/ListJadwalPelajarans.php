<?php

namespace App\Filament\Admin\Resources\JadwalPelajarans\Pages;

use App\Filament\Admin\Resources\JadwalPelajarans\JadwalPelajaranResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListJadwalPelajarans extends ListRecords
{
    protected static string $resource = JadwalPelajaranResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
