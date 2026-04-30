<?php

namespace App\Http\Controllers;

use App\Models\Beritas;
use App\Models\Contact;
use App\Models\ProfilSekolah;
use Illuminate\Http\Request;

class BeritasController extends Controller
{
    public function index(Request $request)
{
    $query = Beritas::latest();

    if ($request->filled('category')) {
        $query->where('category', $request->category);
    }

    $berita  = $query->paginate(6);
    $contact = Contact::first();
    $data    = ProfilSekolah::first();

    return view('Berita.Berita', compact('berita', 'contact', 'data'));
}

    public function show($slug)
    {
        $berita  = Beritas::where('slug', $slug)->firstOrFail();
        $contact = Contact::first();
        $data    = ProfilSekolah::first();
        $berita->increment('views');

        $terkait = Beritas::where('category', $berita->category)
                          ->where('id', '!=', $berita->id)
                          ->latest()
                          ->take(3)
                          ->get();

        $prev = Beritas::where('id', '<', $berita->id)->latest('id')->first();
        $next = Beritas::where('id', '>', $berita->id)->oldest('id')->first();

        return view('Berita.detail-berita', compact('berita', 'terkait', 'prev', 'next', 'contact', 'data'));
    }
}