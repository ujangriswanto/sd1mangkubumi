<?php

namespace App\Filament\Admin\Resources\Students\Widgets;

use App\Models\Student;
use Leandrocfe\FilamentApexCharts\Widgets\ApexChartWidget;

class StudentChartWidget extends ApexChartWidget
{
    protected static ?string $heading = 'Data Siswa per Kelas';

    protected function getOptions(): array
    {
        return [
            'chart' => [
                'type' => 'bar',
                'height' => 350,
            ],
            'series' => [
                [
                    'name' => 'Jumlah Siswa',
                    'data' => [
                        Student::whereHas('schoolClass', fn($q) => $q->where('grade_level', 1))->count(),
                        Student::whereHas('schoolClass', fn($q) => $q->where('grade_level', 2))->count(),
                        Student::whereHas('schoolClass', fn($q) => $q->where('grade_level', 3))->count(),
                        Student::whereHas('schoolClass', fn($q) => $q->where('grade_level', 4))->count(),
                        Student::whereHas('schoolClass', fn($q) => $q->where('grade_level', 5))->count(),
                        Student::whereHas('schoolClass', fn($q) => $q->where('grade_level', 6))->count(),
                    ],
                ],
            ],
            'xaxis' => [
                'categories' => ['Kelas 1', 'Kelas 2', 'Kelas 3', 'Kelas 4', 'Kelas 5', 'Kelas 6'],
            ],
            'colors' => ['#4F46E5'],
            'plotOptions' => [
                'bar' => [
                    'borderRadius' => 5,
                    'horizontal' => false,
                ],
            ],
        ];
    }
}