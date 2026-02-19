<?php

namespace App\Filament\Admin\Resources\TeacherStaff;

use App\Filament\Admin\Resources\TeacherStaff\Pages\CreateTeacherStaff;
use App\Filament\Admin\Resources\TeacherStaff\Pages\EditTeacherStaff;
use App\Filament\Admin\Resources\TeacherStaff\Pages\ListTeacherStaff;
use App\Filament\Admin\Resources\TeacherStaff\Schemas\TeacherStaffForm;
use App\Filament\Admin\Resources\TeacherStaff\Tables\TeacherStaffTable;
use App\Models\TeacherStaff;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class TeacherStaffResource extends Resource
{
    protected static ?string $model = TeacherStaff::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::Users;

    protected static UnitEnum|string|null $navigationGroup = 'SDM';

    protected static ?string $navigationLabel = 'Guru & Staff';

    protected static ?string $modelLabel = 'Guru/Staff';

    protected static ?string $pluralModelLabel = 'Guru & Staff';

    protected static ?int $navigationSort = 1;

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return TeacherStaffForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return TeacherStaffTable::configure($table);
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
            'index' => ListTeacherStaff::route('/'),
            'create' => CreateTeacherStaff::route('/create'),
            'edit' => EditTeacherStaff::route('/{record}/edit'),
        ];
    }
}
