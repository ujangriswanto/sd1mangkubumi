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
}