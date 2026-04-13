<?php

namespace App\Http\Controllers;

use App\Models\TataTertibSekolah;

class TataTertibSekolahController extends Controller
{
    public function index()
    {
        $peraturan = TataTertibSekolah::where('nama_peraturan', 'Tata Tertib Sekolah')
                        ->whereNull('deleted_at')
                        ->get();

        return view('TataTertibSekolah.TataTertibSekolah', compact('peraturan'));
    }

    // ── tambah ini ──
    public function siswa()
    {
        $peraturan = TataTertibSekolah::where('nama_peraturan', 'Tata Tertib Siswa')
                        ->whereNull('deleted_at')
                        ->get();

        return view('TataTertibSiswa.TataTertibSiswa', compact('peraturan'));
    }
}