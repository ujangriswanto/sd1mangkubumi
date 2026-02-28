<?php

use Illuminate\Support\Facades\Route;
use App\Models\ProfilSekolah;
use App\Http\Controllers\BeritasController;
use App\Http\Controllers\VisiMisiController;
use App\Http\Controllers\PrestasiController;
use App\Http\Controllers\ProgramSekolahController;
use App\Http\Controllers\PpdbController;


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
Route::get('/berita', [BeritasController::class, 'index'])->name('berita.index');
Route::get('/berita/{slug}', [BeritasController::class, 'show'])->name('berita.show');



/*
|--------------------------------------------------------------------------
| PROFIL SEKOLAH
|--------------------------------------------------------------------------
*/

Route::get('/visi-misi', [VisiMisiController::class, 'index']);
Route::get('/sejarah', [VisiMisiController::class, 'sejarah'])->name('sejarah');
Route::get('/guru', [VisiMisiController::class, 'guru']);

/*
|--------------------------------------------------------------------------
| PRESTASI
|--------------------------------------------------------------------------
*/

Route::get('/prestasi', [PrestasiController::class, 'index']);



Route::get('/program-sekolah', [ProgramSekolahController::class, 'index'])->name('program-sekolah');

/*
|--------------------------------------------------------------------------
| PPDB
|--------------------------------------------------------------------------
*/
Route::prefix('ppdb')->group(function () {

    // Halaman Form Wizard
    Route::get('/', [PpdbController::class, 'index'])
        ->name('ppdb.index');

    // Proses Submit
    Route::post('/store', [PpdbController::class, 'store'])
        ->name('ppdb.store');

});