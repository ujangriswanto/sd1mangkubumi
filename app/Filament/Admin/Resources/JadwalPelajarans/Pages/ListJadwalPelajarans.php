<?php

namespace App\Filament\Admin\Resources\JadwalPelajarans\Pages;

use App\Filament\Admin\Resources\JadwalPelajarans\JadwalPelajaranResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;
use Filament\Schemas\Components\Tabs\Tab;
use App\Models\JadwalPelajaran;

class ListJadwalPelajarans extends ListRecords
{
    protected static string $resource = JadwalPelajaranResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }

    public function getTabs(): array
    {
        return [
            'Semua' => Tab::make()
                ->badge(JadwalPelajaran::count()),

            'Kelas 1' => Tab::make()
                ->badge(JadwalPelajaran::where('kelas', 'Kelas 1')->count())
                ->modifyQueryUsing(fn ($query) =>
                    $query->where('kelas', 'Kelas 1')
                ),

            'Kelas 2' => Tab::make()
                ->badge(JadwalPelajaran::where('kelas', 'Kelas 2')->count())
                ->modifyQueryUsing(fn ($query) =>
                    $query->where('kelas', 'Kelas 2')
                ),

            'Kelas 3' => Tab::make()
                ->badge(JadwalPelajaran::where('kelas', 'Kelas 3')->count())
                ->modifyQueryUsing(fn ($query) =>
                    $query->where('kelas', 'Kelas 3')
                ),

            'Kelas 4' => Tab::make()
                ->badge(JadwalPelajaran::where('kelas', 'Kelas 4')->count())
                ->modifyQueryUsing(fn ($query) =>
                    $query->where('kelas', 'Kelas 4')
                ),

            'Kelas 5' => Tab::make()
                ->badge(JadwalPelajaran::where('kelas', 'Kelas 5')->count())
                ->modifyQueryUsing(fn ($query) =>
                    $query->where('kelas', 'Kelas 5')
                ),

            'Kelas 6' => Tab::make()
                ->badge(JadwalPelajaran::where('kelas', 'Kelas 6')->count())
                ->modifyQueryUsing(fn ($query) =>
                    $query->where('kelas', 'Kelas 6')
                ),
        ];
    }
}