<?php

namespace App\Http\Controllers;

use App\Models\ProfilSekolah;
use Illuminate\Http\Request;

class VisiMisiController extends Controller
{
    public function index()
    {
        $data = ProfilSekolah::first();
        return view('VisiMisi.VisiMisi', compact('data'));
    }

    public function guru()
    {
        $data = ProfilSekolah::first();
        return view('profil.guru', compact('data'));
    }

    public function sejarah()
    {
        $data = ProfilSekolah::first();
        return view('Sejarah.sejarah', compact('data'));
    }
}