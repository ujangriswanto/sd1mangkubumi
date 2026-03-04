<?php

namespace App\Http\Controllers;

use App\Models\ProfilSekolah;
use App\Models\Contact;
use Illuminate\Http\Request;

class VisiMisiController extends Controller
{
    public function index()
    {
        $data    = ProfilSekolah::first();
        $contact = Contact::first();
        return view('VisiMisi.VisiMisi', compact('data', 'contact'));
    }

    public function guru()
    {
        $data    = ProfilSekolah::first();
        $contact = Contact::first();
        return view('profil.guru', compact('data', 'contact'));
    }

    public function sejarah()
    {
        $data    = ProfilSekolah::first();
        $contact = Contact::first();
        return view('Sejarah.sejarah', compact('data', 'contact'));
    }
}