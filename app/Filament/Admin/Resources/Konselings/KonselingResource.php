<?php

namespace App\Filament\Admin\Resources\Konselings;

use App\Filament\Admin\Resources\Konselings\Pages\CreateKonseling;
use App\Filament\Admin\Resources\Konselings\Pages\EditKonseling;
use App\Filament\Admin\Resources\Konselings\Pages\ListKonselings;
use App\Filament\Admin\Resources\Konselings\Schemas\KonselingForm;
use App\Filament\Admin\Resources\Konselings\Tables\KonselingsTable;
use App\Models\Konseling;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class KonselingResource extends Resource
{
    protected static ?string $model = Konseling::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedLifebuoy;

    protected static ?string $recordTitleAttribute = 'konseling';

    protected static UnitEnum|string|null $navigationGroup = 'Akademik';

    protected static ?string $navigationLabel = 'Konseling';

    public static function form(Schema $schema): Schema
    {
        return KonselingForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return KonselingsTable::configure($table);
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
            'index' => ListKonselings::route('/'),
            'create' => CreateKonseling::route('/create'),
            'edit' => EditKonseling::route('/{record}/edit'),
        ];
    }
}
