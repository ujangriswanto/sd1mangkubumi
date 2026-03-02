<?php

namespace App\Http\Controllers;

use App\Models\Header;
use Illuminate\Http\Request;

class HeaderController extends Controller
{
    public function index()
    {
        $headers = Header::where('show_header', true)
                         ->select('header_foto')
                         ->get();

        return view('index', compact('headers'));
    }
}