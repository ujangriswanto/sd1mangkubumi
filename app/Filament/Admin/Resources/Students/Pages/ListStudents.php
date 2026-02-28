<?php

namespace App\Filament\Admin\Resources\Students\Pages;

use App\Filament\Admin\Resources\Students\StudentResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;
use Filament\Schemas\Components\Tabs\Tab;
use Illuminate\Database\Eloquent\Builder;

use App\Models\Student;
use App\Models\SchoolClass;

class ListStudents extends ListRecords
{
    protected static string $resource = StudentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make()
                ->label('Tambah Siswa'),
        ];
    }

    public function getTabs(): array
    {
        $tabs = [
            'all' => Tab::make('Semua Kelas')
                ->badge(Student::count()),
        ];

        $classes = SchoolClass::orderBy('name')->get();

        foreach ($classes as $class) {
            $tabs['class_' . $class->id] =
                Tab::make($class->name)
                    ->badge(
                        Student::where('school_class_id', $class->id)->count()
                    )
                    ->modifyQueryUsing(fn (Builder $query) =>
                        $query->where('school_class_id', $class->id)
                    );
        }

        return $tabs;
    }
}
