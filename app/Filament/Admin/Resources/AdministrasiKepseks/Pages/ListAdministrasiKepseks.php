<?php

namespace App\Filament\Admin\Resources\AdministrasiKepseks\Pages;

use App\Filament\Admin\Resources\AdministrasiKepseks\AdministrasiKepsekResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListAdministrasiKepseks extends ListRecords
{
    protected static string $resource = AdministrasiKepsekResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make()
                ->label('Tambah Administrasi Kepsek')
                ->icon('heroicon-o-plus-circle'),
        ];
    }
}
