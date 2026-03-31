<?php

namespace App\Filament\Admin\Resources\AdministrasiGurus;

use App\Filament\Admin\Resources\AdministrasiGurus\Pages\CreateAdministrasiGuru;
use App\Filament\Admin\Resources\AdministrasiGurus\Pages\EditAdministrasiGuru;
use App\Filament\Admin\Resources\AdministrasiGurus\Pages\ListAdministrasiGurus;
use App\Filament\Admin\Resources\AdministrasiGurus\Schemas\AdministrasiGuruForm;
use App\Filament\Admin\Resources\AdministrasiGurus\Tables\AdministrasiGurusTable;
use App\Models\AdministrasiGuru;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;

class AdministrasiGuruResource extends Resource
{
    protected static ?string $model = AdministrasiGuru::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedPresentationChartBar;

    protected static ?string $recordTitleAttribute = 'guru';

    protected static UnitEnum|string|null $navigationGroup = 'Akademik';

    protected static ?string $navigationLabel = 'Administrasi Guru';

    public static function getEloquentQuery(): Builder
    {
        $query = parent::getEloquentQuery();

        if (auth()->user()->hasRole('guru')) {
            $query->where('user_id', auth()->id());
        }

        return $query;
    }

    public static function canViewAny(): bool
    {
        return auth()->user()->hasRole('guru')
            || auth()->user()->hasRole('admin')
            || auth()->user()->hasRole('kepala_sekolah');
    }

    public static function canCreate(): bool
    {
        return auth()->user()->hasRole('guru');
    }

    public static function canEdit($record): bool
    {
        if ($record->status === 'approved') {
            return false;
        }

        if (auth()->user()->hasRole('kepala_sekolah')) {
            return true;
        }

        return auth()->user()->hasRole('guru')
            && $record->user_id == auth()->id();
    }

    public static function canDelete($record): bool
    {
        return auth()->user()->hasRole('guru')
            && $record->user_id == auth()->id();
    }

    public static function form(Schema $schema): Schema
    {
        return AdministrasiGuruForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return AdministrasiGurusTable::configure($table);
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
            'index' => ListAdministrasiGurus::route('/'),
            'create' => CreateAdministrasiGuru::route('/create'),
            'edit' => EditAdministrasiGuru::route('/{record}/edit'),
        ];
    }
}
