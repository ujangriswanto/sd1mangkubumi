<?php

use Illuminate\Support\Facades\Route;
use App\Models\ProfilSekolah;
use App\Http\Controllers\BeritasController;
use App\Http\Controllers\VisiMisiController;
use App\Http\Controllers\PrestasiController;

/*
|--------------------------------------------------------------------------
| HALAMAN HOME
|--------------------------------------------------------------------------
*/

Route::get('/', function () {

    // cek kalau ada file statis index.html
    $static = public_path('index.html');

    if (file_exists($static)) {
        return response()->file($static);
    }

    // ambil data profil sekolah
    $data = ProfilSekolah::first();

    return view('index', compact('data'));
});


/*
|--------------------------------------------------------------------------
| BERITA
|--------------------------------------------------------------------------
*/

Route::get('/berita', [BeritasController::class, 'index']);
Route::get('/berita/{slug}', [BeritasController::class, 'show']);



/*
|--------------------------------------------------------------------------
| PROFIL SEKOLAH
|--------------------------------------------------------------------------
*/

Route::get('/visi-misi', [VisiMisiController::class, 'index']);
Route::get('/sejarah', [VisiMisiController::class, 'sejarah'])->name('sejarah');
Route::get('/guru', [VisiMisiController::class, 'guru']);


Route::get('/prestasi', [PrestasiController::class, 'index']);