<?php

namespace App\Filament\Admin\Resources\PpdbRegistrations;

use App\Filament\Admin\Resources\PpdbRegistrations\Pages\CreatePpdbRegistration;
use App\Filament\Admin\Resources\PpdbRegistrations\Pages\EditPpdbRegistration;
use App\Filament\Admin\Resources\PpdbRegistrations\Pages\ListPpdbRegistrations;
use App\Filament\Admin\Resources\PpdbRegistrations\Schemas\PpdbRegistrationForm;
use App\Filament\Admin\Resources\PpdbRegistrations\Tables\PpdbRegistrationsTable;
use App\Models\PpdbRegistration;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class PpdbRegistrationResource extends Resource
{
    protected static ?string $model = PpdbRegistration::class;

    protected static string|BackedEnum|null $navigationIcon = 'heroicon-o-document-text';

    protected static UnitEnum|string|null $navigationGroup = 'PPDB';

    protected static ?string $navigationLabel = 'Pendaftaran PPDB';

    protected static ?int $navigationSort = 2;

    protected static ?string $recordTitleAttribute = 'student_name';

    public static function form(Schema $schema): Schema
    {
        return PpdbRegistrationForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PpdbRegistrationsTable::configure($table);
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
            'index' => ListPpdbRegistrations::route('/'),
            // 'create' => CreatePpdbRegistration::route('/create'),
            'edit' => EditPpdbRegistration::route('/{record}/edit'),
        ];
    }
}
