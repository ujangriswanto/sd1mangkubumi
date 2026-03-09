<?php

namespace App\Filament\Admin\Resources\JadwalPelajarans;

use App\Filament\Admin\Resources\JadwalPelajarans\Pages\CreateJadwalPelajaran;
use App\Filament\Admin\Resources\JadwalPelajarans\Pages\EditJadwalPelajaran;
use App\Filament\Admin\Resources\JadwalPelajarans\Pages\ListJadwalPelajarans;
use App\Filament\Admin\Resources\JadwalPelajarans\Pages\ViewJadwalPelajaran;
use App\Filament\Admin\Resources\JadwalPelajarans\Schemas\JadwalPelajaranForm;
use App\Filament\Admin\Resources\JadwalPelajarans\Schemas\JadwalPelajaranInfolist;
use App\Filament\Admin\Resources\JadwalPelajarans\Tables\JadwalPelajaransTable;
use App\Models\JadwalPelajaran;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class JadwalPelajaranResource extends Resource
{
    protected static ?string $model = JadwalPelajaran::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'yes';

    public static function form(Schema $schema): Schema
    {
        return JadwalPelajaranForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return JadwalPelajaranInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return JadwalPelajaransTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListJadwalPelajarans::route('/'),
            'create' => CreateJadwalPelajaran::route('/create'),
            'view' => ViewJadwalPelajaran::route('/{record}'),
            'edit' => EditJadwalPelajaran::route('/{record}/edit'),
        ];
    }
}
