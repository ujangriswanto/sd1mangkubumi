<?php

namespace App\Http\Controllers;

use App\Models\Prestasi;
use Illuminate\Http\Request;

class PrestasiController extends Controller
{
    public function index()
    {
        // Mengambil 6 prestasi terbaru
        $prestasis = Prestasi::latest()->take(6)->get();

        // Mengirim data prestasi ke view
        return view('prestasi.index', compact('prestasis'));
    }
}