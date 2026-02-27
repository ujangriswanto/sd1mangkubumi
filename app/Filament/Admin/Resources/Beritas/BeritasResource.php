<?php

namespace App\Filament\Admin\Resources\Beritas;

use App\Filament\Admin\Resources\Beritas\Pages\CreateBeritas;
use App\Filament\Admin\Resources\Beritas\Pages\EditBeritas;
use App\Filament\Admin\Resources\Beritas\Pages\ListBeritas;
use App\Filament\Admin\Resources\Beritas\Schemas\BeritasForm;
use App\Filament\Admin\Resources\Beritas\Tables\BeritasTable;
use App\Models\Beritas;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class BeritasResource extends Resource
{
    protected static ?string $model = Beritas::class;

    protected static string|BackedEnum|null $navigationIcon = 'heroicon-o-newspaper';

    protected static UnitEnum|string|null $navigationGroup = 'Informasi';

    protected static ?string $navigationLabel = 'Berita';

    protected static ?string $modelLabel = 'Berita';

    protected static ?string $pluralModelLabel = 'Berita';

    protected static ?int $navigationSort = 1;

    protected static ?string $recordTitleAttribute = 'title';

    public static function form(Schema $schema): Schema
    {
        return BeritasForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return BeritasTable::configure($table);
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
            'index' => ListBeritas::route('/'),
            // 'create' => CreateBeritas::route('/create'),
            // 'edit' => EditBeritas::route('/{record}/edit'),
        ];
    }
}
