<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProfilSekolah;
use App\Models\Contact;

class ProgramSekolahController extends Controller
{
    public function index()
    {
        $data    = ProfilSekolah::first();
        $contact = Contact::first();
        return view('programsekolah.ProgramSekolah', compact('data', 'contact'));
    }
}