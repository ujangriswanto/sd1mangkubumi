<?php

namespace App\Http\Controllers;

use App\Models\Header;
use Illuminate\Http\Request;

class HeaderController extends Controller
{
    public function index()
    {
        $headerData = Header::first();

        // Jika tidak ada data, set fallback dengan gambar default
        if (!$headerData) {
            $headerData = (object)[
                'header_foto' => 'default.jpg', // Gambar default jika tidak ada data
                'show_header' => true,
            ];
        }

        return view('index', compact('headerData'));
    }
}