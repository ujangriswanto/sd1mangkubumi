<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\SchoolClass;
use Illuminate\Http\Request;

class DataSiswaController extends Controller
{
    public function index()
    {
        // Ambil data statistik utama
        $totalSiswa    = Student::count();
        $totalAktif    = Student::where('is_active', 1)->count();
        $totalNonAktif = Student::where('is_active', 0)->count();

        // Ambil data rekap per kelas
        $perKelas = SchoolClass::withCount([
            'students as total',
            'students as aktif' => fn($q) => $q->where('is_active', 1),
            'students as nonaktif' => fn($q) => $q->where('is_active', 0),
        ])->orderBy('name')->get();

        // return view ke folder DataSiswa file DataSiswa
        return view('DataSiswa.DataSiswa', compact(
            'totalSiswa',
            'totalAktif',
            'totalNonAktif',
            'perKelas'
        ));
    }
}