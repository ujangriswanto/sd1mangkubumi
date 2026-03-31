<?php

namespace App\Filament\Admin\Resources\JurnalHarians;

use App\Filament\Admin\Resources\JurnalHarians\Pages\CreateJurnalHarian;
use App\Filament\Admin\Resources\JurnalHarians\Pages\EditJurnalHarian;
use App\Filament\Admin\Resources\JurnalHarians\Pages\ListJurnalHarians;
use App\Filament\Admin\Resources\JurnalHarians\Schemas\JurnalHarianForm;
use App\Filament\Admin\Resources\JurnalHarians\Tables\JurnalHariansTable;
use App\Models\JurnalHarian;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class JurnalHarianResource extends Resource
{
    protected static ?string $model = JurnalHarian::class;

    protected static string|BackedEnum|null $navigationIcon = 'heroicon-o-book-open';

    protected static UnitEnum|string|null $navigationGroup = 'Akademik';

    protected static ?string $navigationLabel = 'Jurnal Harian Guru';

    protected static ?int $navigationSort = 3;

    protected static ?string $recordTitleAttribute = 'kelas';

    public static function getEloquentQuery(): Builder
    {
        $user = auth()->user();

        if ($user->hasRole('guru')) {
            return parent::getEloquentQuery()
                ->where('user_id', $user->id);
        }

        return parent::getEloquentQuery();
    }

    public static function canEdit(Model $record): bool
    {
        $user = auth()->user();

        if ($user->hasRole('guru')) {
            return $record->user_id === $user->id;
        }

        return true;
    }

    public static function canDelete(Model $record): bool
    {
        $user = auth()->user();

        if ($user->hasRole('guru')) {
            return $record->user_id === $user->id;
        }

        return true;
    }

    public static function canCreate(): bool
    {
        return auth()->user()->hasRole('guru');
    }

    public static function form(Schema $schema): Schema
    {
        return JurnalHarianForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return JurnalHariansTable::configure($table);
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
            'index' => ListJurnalHarians::route('/'),
            'create' => CreateJurnalHarian::route('/create'),
            'edit' => EditJurnalHarian::route('/{record}/edit'),
        ];
    }
}
