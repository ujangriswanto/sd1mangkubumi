<?php

namespace App\Http\Controllers;

use App\Models\Beritas;
use Illuminate\Http\Request;

class BeritasController extends Controller
{
    public function index()
    {
        $berita = Beritas::latest()->paginate(6);
        return view('Berita.Berita', compact('berita'));
    }

    public function show($slug)
    {
        $berita = Beritas::where('slug', $slug)->firstOrFail();
        $berita->increment('views');

        $terkait = Beritas::where('category', $berita->category)
                          ->where('id', '!=', $berita->id)
                          ->latest()
                          ->take(3)
                          ->get();

        $prev = Beritas::where('id', '<', $berita->id)->latest('id')->first();
        $next = Beritas::where('id', '>', $berita->id)->oldest('id')->first();

        return view('Berita.detail-berita', compact('berita', 'terkait', 'prev', 'next'));
    }
}