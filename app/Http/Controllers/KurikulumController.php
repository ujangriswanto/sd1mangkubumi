<?php

namespace App\Http\Controllers;

use App\Models\ProfilSekolah;
use App\Models\Contact;

class KurikulumController extends Controller
{
    public function index()
    {
        $data    = ProfilSekolah::first();
        $contact = Contact::first();
        return view('kurikulum.kurikulum', compact('data', 'contact'));
    }
}