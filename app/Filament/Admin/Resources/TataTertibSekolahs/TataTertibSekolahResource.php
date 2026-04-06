<?php

namespace App\Filament\Admin\Resources\TataTertibSekolahs;

use App\Filament\Admin\Resources\TataTertibSekolahs\Pages\CreateTataTertibSekolah;
use App\Filament\Admin\Resources\TataTertibSekolahs\Pages\EditTataTertibSekolah;
use App\Filament\Admin\Resources\TataTertibSekolahs\Pages\ListTataTertibSekolahs;
use App\Filament\Admin\Resources\TataTertibSekolahs\Pages\ViewTataTertibSekolah;
use App\Filament\Admin\Resources\TataTertibSekolahs\Schemas\TataTertibSekolahForm;
use App\Filament\Admin\Resources\TataTertibSekolahs\Tables\TataTertibSekolahsTable;
use App\Models\TataTertibSekolah;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables\Table;
use UnitEnum;

class TataTertibSekolahResource extends Resource
{
    protected static ?string $model = TataTertibSekolah::class;

    protected static ?string $navigationLabel = 'Tata Tertib Sekolah';

    protected static string|BackedEnum|null $navigationIcon = 'heroicon-o-clipboard-document-list';

    protected static UnitEnum|string|null $navigationGroup = 'Akademik';

    protected static ?string $recordTitleAttribute = 'nama_peraturan';

    public static function form(Schema $schema): Schema
    {
        return TataTertibSekolahForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return TataTertibSekolahsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListTataTertibSekolahs::route('/'),
            'create' => CreateTataTertibSekolah::route('/create'),
            'view' => ViewTataTertibSekolah::route('/{record}'),
            'edit' => EditTataTertibSekolah::route('/{record}/edit'),
        ];
    }
}