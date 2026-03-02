<?php

namespace App\Filament\Admin\Resources\Headers;

use App\Filament\Admin\Resources\Headers\Pages\CreateHeader;
use App\Filament\Admin\Resources\Headers\Pages\EditHeader;
use App\Filament\Admin\Resources\Headers\Pages\ListHeaders;
use App\Filament\Admin\Resources\Headers\Pages\ViewHeader;
use App\Filament\Admin\Resources\Headers\Schemas\HeaderForm;
use App\Filament\Admin\Resources\Headers\Schemas\HeaderInfolist;
use App\Filament\Admin\Resources\Headers\Tables\HeadersTable;
use App\Models\Header;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class HeaderResource extends Resource
{
    protected static ?string $model = Header::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return HeaderForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return HeaderInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return HeadersTable::configure($table);
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
            'index' => ListHeaders::route('/'),
            'create' => CreateHeader::route('/create'),
            'view' => ViewHeader::route('/{record}'),
            'edit' => EditHeader::route('/{record}/edit'),
        ];
    }

    public static function getRecordRouteBindingEloquentQuery(): Builder
    {
        return parent::getRecordRouteBindingEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }
}
