<?php

namespace App\Filament\Admin\Resources\Prestasis;

use App\Filament\Admin\Resources\Prestasis\Pages\CreatePrestasi;
use App\Filament\Admin\Resources\Prestasis\Pages\EditPrestasi;
use App\Filament\Admin\Resources\Prestasis\Pages\ListPrestasis;
use App\Filament\Admin\Resources\Prestasis\Schemas\PrestasiForm;
use App\Filament\Admin\Resources\Prestasis\Tables\PrestasisTable;
use App\Models\Prestasi;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class PrestasiResource extends Resource
{
    protected static ?string $model = Prestasi::class;

    protected static string|BackedEnum|null $navigationIcon = 'heroicon-o-trophy';

    protected static UnitEnum|string|null $navigationGroup = 'Informasi';

    protected static ?string $navigationLabel = 'Prestasi';

    protected static ?string $modelLabel = 'Prestasi';

    protected static ?string $pluralModelLabel = 'Prestasi';

    protected static ?int $navigationSort = 2;

    protected static ?string $recordTitleAttribute = 'title';

    public static function form(Schema $schema): Schema
    {
        return PrestasiForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PrestasisTable::configure($table);
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
            'index' => ListPrestasis::route('/'),
            'create' => CreatePrestasi::route('/create'),
            'edit' => EditPrestasi::route('/{record}/edit'),
        ];
    }
}
