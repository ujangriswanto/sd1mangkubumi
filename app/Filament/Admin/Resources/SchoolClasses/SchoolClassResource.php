<?php

namespace App\Filament\Admin\Resources\SchoolClasses;

use App\Filament\Admin\Resources\SchoolClasses\Pages\CreateSchoolClass;
use App\Filament\Admin\Resources\SchoolClasses\Pages\EditSchoolClass;
use App\Filament\Admin\Resources\SchoolClasses\Pages\ListSchoolClasses;
use App\Filament\Admin\Resources\SchoolClasses\Schemas\SchoolClassForm;
use App\Filament\Admin\Resources\SchoolClasses\Tables\SchoolClassesTable;
use App\Models\SchoolClass;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Model;

class SchoolClassResource extends Resource
{
    protected static ?string $model = SchoolClass::class;

    protected static string|BackedEnum|null $navigationIcon = 'heroicon-o-academic-cap';
    
    protected static UnitEnum|string|null $navigationGroup = 'Akademik';

    protected static ?string $navigationLabel = 'Kelas';

    protected static ?int $navigationSort = 1;

    protected static ?string $recordTitleAttribute = 'name';

    // public static function canViewAny(): bool
    // {
    //     return auth()->user()?->can('view_classes');
    // }

    // public static function canCreate(): bool
    // {
    //     return auth()->user()?->can('create_classes');
    // }

    // public static function canEdit(Model $record): bool
    // {
    //     return auth()->user()?->can('edit_classes');
    // }

    // public static function canDelete(Model $record): bool
    // {
    //     return auth()->user()?->can('delete_classes');
    // }

    public static function canViewAny(): bool
    {
        return auth()->user()?->hasRole('admin');
    }

    public static function canCreate(): bool
    {
        return auth()->user()?->hasRole('admin');
    }

    public static function canEdit(Model $record): bool
    {
        return auth()->user()?->hasRole('admin');
    }

    public static function canDelete(Model $record): bool
    {
        return auth()->user()?->hasRole('admin');
    }

    public static function form(Schema $schema): Schema
    {
        return SchoolClassForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return SchoolClassesTable::configure($table);
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
            'index' => ListSchoolClasses::route('/'),
            'create' => CreateSchoolClass::route('/create'),
            'edit' => EditSchoolClass::route('/{record}/edit'),
        ];
    }
}
