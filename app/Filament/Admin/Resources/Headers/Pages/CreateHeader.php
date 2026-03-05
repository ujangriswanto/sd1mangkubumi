<?php

namespace App\Filament\Admin\Resources\Headers\Pages;

use App\Filament\Admin\Resources\Headers\HeaderResource;
use Filament\Resources\Pages\CreateRecord;

class CreateHeader extends CreateRecord
{
    protected static string $resource = HeaderResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}