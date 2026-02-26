<?php

namespace App\Http\Controllers;

use App\Models\Prestasi;
use Illuminate\Http\Request;

class PrestasiController extends Controller
{
    public function index()
    {
        // Mengambil 6 prestasi terbaru
        // $prestasis = Prestasi::latest()->take(6)->get();
        $prestasis = Prestasi::where('is_active', true)
            ->orderBy('sort_order', 'asc')
            ->orderBy('date', 'desc')
            ->take(6)
            ->get();

        // Mengirim data prestasi ke view
        return view('index', compact('prestasis'));
    }
}