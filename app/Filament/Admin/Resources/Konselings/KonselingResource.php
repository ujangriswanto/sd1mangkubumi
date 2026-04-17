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
use Illuminate\Database\Eloquent\Builder;

class KonselingResource extends Resource
{
    protected static ?string $model = Konseling::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedLifebuoy;

    protected static ?string $recordTitleAttribute = 'konseling';

    protected static UnitEnum|string|null $navigationGroup = 'Akademik';

    protected static ?string $navigationLabel = 'Konseling';

    protected static ?string $pluralModelLabel = 'Data Konseling';

    protected static ?string $modelLabel = 'Data Konseling';

    protected static ?int $navigationSort = 4;

    public static function getEloquentQuery(): Builder
    {
        $query = parent::getEloquentQuery();

        $user = auth()->user();

        //dd(auth()->user()->school_class_id);
        // dd(auth()->user()->teacherStaff?->schoolClass?->id);

        // guru hanya lihat kelasnya
        if ($user->role === 'guru' && $user->teacherStaff) {
            $classId = $user->teacherStaff?->schoolClass?->id;

            $query->whereHas('student', function ($q) use ($classId) {
                $q->where('school_class_id', $classId);
            });
        }

        return $query;
    }

    public static function canViewAny(): bool
    {
        return in_array(auth()->user()->role, [
            'admin',
            'guru',
            'kepala_sekolah'
        ]);
    }

    public static function canCreate(): bool
    {
        return in_array(auth()->user()->role, ['admin', 'guru']);
    }

    public static function canEdit($record): bool
    {
        $user = auth()->user();

        // admin bebas
        if ($user->role === 'admin') {
            return true;
        }

        // guru hanya kelasnya
        if ($user->isGuru() && $user->teacherStaff?->schoolClass) {
            return $record->student?->school_class_id === $user->teacherStaff->schoolClass->id;
        }

        return false;
    }

    public static function canDelete($record): bool
    {
        $user = auth()->user();

        if ($user->role === 'admin') {
            return true;
        }

        if ($user->isGuru() && $user->teacherStaff?->schoolClass) {
            return $record->student?->school_class_id === $user->teacherStaff->schoolClass->id;
        }

        return false;
    }

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
