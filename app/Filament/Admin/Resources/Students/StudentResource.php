<?php

namespace App\Filament\Admin\Resources\Students;

use App\Filament\Admin\Resources\Students\Pages\CreateStudent;
use App\Filament\Admin\Resources\Students\Pages\EditStudent;
use App\Filament\Admin\Resources\Students\Pages\ListStudents;
use App\Filament\Admin\Resources\Students\Schemas\StudentForm;
use App\Filament\Admin\Resources\Students\Tables\StudentsTable;
use App\Models\Student;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;



class StudentResource extends Resource
{
    protected static ?string $model = Student::class;

    protected static string|BackedEnum|null $navigationIcon = 'heroicon-o-user-group';
    
    protected static UnitEnum|string|null $navigationGroup = 'Akademik';

    protected static ?string $navigationLabel = 'Siswa';

    protected static ?int $navigationSort = 2;

    protected static ?string $recordTitleAttribute = 'name';

    public static function canViewAny(): bool
    {
        return auth()->user()?->can('view_students');
    }

    public static function canCreate(): bool
    {
        return auth()->user()?->can('create_students');
    }

    public static function canEdit(Model $record): bool
    {
        return auth()->user()?->can('edit_students');
    }

    public static function canDelete(Model $record): bool
    {
        return auth()->user()?->can('delete_students');
    }

    public static function getEloquentQuery(): Builder
    {
        $query = parent::getEloquentQuery();

        $user = auth()->user();

        if ($user?->hasRole('guru')) {

            $teacher = $user->teacherStaff;

            // dd([
            //     'user' => $user->name,
            //     'teacher' => $teacher,
            //     'class_id' => $teacher?->school_class_id,
            // ]);

            if ($teacher && $teacher->schoolClass) {
                return $query->where(
                    'school_class_id',
                    $teacher->schoolClass->id
                );
            }
        }

        return $query;
    }

    public static function form(Schema $schema): Schema
    {
        return StudentForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return StudentsTable::configure($table);
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
            'index' => ListStudents::route('/'),
            'create' => CreateStudent::route('/create'),
            'edit' => EditStudent::route('/{record}/edit'),
        ];
    }
}
