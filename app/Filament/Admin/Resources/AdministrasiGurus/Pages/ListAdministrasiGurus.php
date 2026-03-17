<?php

namespace App\Filament\Admin\Resources\AdministrasiGurus\Pages;

use App\Filament\Admin\Resources\AdministrasiGurus\AdministrasiGuruResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListAdministrasiGurus extends ListRecords
{
    protected static string $resource = AdministrasiGuruResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make()
                ->label('Tambah Administrasi Guru'),
        ];
    }
}
