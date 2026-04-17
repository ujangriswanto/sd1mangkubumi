<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Subject;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $subjects = [
            'Bahasa indonesia',
            'Bahasa Inggris',
            'Bahasa dan Sastra Sunda',
            'Ilmu Pengetahuan Alam dan Sosial',
            'Matematika',
            'Pembiasaan',
            'Pendidikan Agama Islam dan Budi Pekerti',
            'Pendidikan Jasmani, Olahraga dan Kesehatan',
            'Pendidikan Pancasila',
            'Project Based Learning',
            'Seni dan Budaya',
            'Upacara'
        ];

        foreach ($subjects as $subject) {
            Subject::create(['name' => $subject]);
        }
    }
}
