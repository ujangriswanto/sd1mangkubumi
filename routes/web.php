<?php

use App\Models\Beritas;
use App\Http\Controllers\BeritasController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $static = public_path('index.html');

    if (file_exists($static)) {
        return response()->file($static);
    }

    return view('index');
});

Route::get('/berita', [BeritasController::class, 'index']);
Route::get('/berita/{slug}', [BeritasController::class, 'show']);
