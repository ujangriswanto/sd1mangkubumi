<?php

namespace App\Filament\Admin\Resources\AdministrasiKepseks;

use App\Filament\Admin\Resources\AdministrasiKepseks\Pages\CreateAdministrasiKepsek;
use App\Filament\Admin\Resources\AdministrasiKepseks\Pages\EditAdministrasiKepsek;
use App\Filament\Admin\Resources\AdministrasiKepseks\Pages\ListAdministrasiKepseks;
use App\Filament\Admin\Resources\AdministrasiKepseks\Schemas\AdministrasiKepsekForm;
use App\Filament\Admin\Resources\AdministrasiKepseks\Tables\AdministrasiKepseksTable;
use App\Models\AdministrasiKepsek;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Support\Facades\Auth;

class AdministrasiKepsekResource extends Resource
{
    protected static ?string $model = AdministrasiKepsek::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedStar;

    protected static ?string $recordTitleAttribute = 'kepsek';

    protected static UnitEnum|string|null $navigationGroup = 'Akademik';

    protected static ?string $navigationLabel = 'Administrasi Kepala Sekolah';

    protected static ?string $modelLabel = 'Administrasi Kepala Sekolah';

    public static function canCreate(): bool
    {
        return auth()->user()->hasRole('kepala_sekolah');
    }

    public static function canEdit($record): bool
    {
        return auth()->user()->hasRole('kepala_sekolah');
    }

    public static function canDelete($record): bool
    {
        return auth()->user()->hasRole('kepala_sekolah');
    }

    public static function canViewAny(): bool
    {
        return auth()->user()->hasRole('kepala_sekolah')
            || auth()->user()->hasRole('admin');
    }

    public static function form(Schema $schema): Schema
    {
        return AdministrasiKepsekForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return AdministrasiKepseksTable::configure($table);
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
            'index' => ListAdministrasiKepseks::route('/'),
            'create' => CreateAdministrasiKepsek::route('/create'),
            'edit' => EditAdministrasiKepsek::route('/{record}/edit'),
        ];
    }
}
