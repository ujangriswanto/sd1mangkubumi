<?php

namespace App\Filament\Admin\Resources\Grades;

use App\Filament\Admin\Resources\Grades\Pages\CreateGrade;
use App\Filament\Admin\Resources\Grades\Pages\EditGrade;
use App\Filament\Admin\Resources\Grades\Pages\ListGrades;
use App\Filament\Admin\Resources\Grades\Schemas\GradeForm;
use App\Filament\Admin\Resources\Grades\Tables\GradesTable;
use App\Models\Grade;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class GradeResource extends Resource
{
    protected static ?string $model = Grade::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'grade';

    protected static UnitEnum|string|null $navigationGroup = 'Akademik';

    protected static ?string $navigationLabel = 'Daftar Nilai';

    protected static ?string $pluralModelLabel = 'Data Nilai';
    
    protected static ?string $modelLabel = 'Nilai';

    public static function canCreate(): bool
    {
        return auth()->check() && auth()->user()->hasRole('guru');
    }

    public static function canEdit($record): bool
    {
        return auth()->check()
            && auth()->user()->hasRole('guru')
            && $record->school_class_id === auth()->user()?->teacherStaff?->schoolClass?->id;
    }

    public static function canDelete($record): bool
    {
        return auth()->check() && auth()->user()->hasRole('guru');
    }

    public static function canViewAny(): bool
    {
        return auth()->check()
            && auth()->user()->hasAnyRole(['guru', 'admin', 'kepala_sekolah']);
    }

    public static function form(Schema $schema): Schema
    {
        return GradeForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return GradesTable::configure($table);
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
            'index' => ListGrades::route('/'),
            'create' => CreateGrade::route('/create'),
            'edit' => EditGrade::route('/{record}/edit'),
        ];
    }
}
