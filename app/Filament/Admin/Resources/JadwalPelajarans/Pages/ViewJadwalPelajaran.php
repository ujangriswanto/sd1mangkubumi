<?php

namespace App\Filament\Admin\Resources\JadwalPelajarans\Pages;

use App\Filament\Admin\Resources\JadwalPelajarans\JadwalPelajaranResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewJadwalPelajaran extends ViewRecord
{
    protected static string $resource = JadwalPelajaranResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
