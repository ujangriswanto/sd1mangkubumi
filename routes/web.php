<?php

use Illuminate\Support\Facades\Route;
use App\Models\ProfilSekolah;
use App\Http\Controllers\BeritasController;
use App\Http\Controllers\VisiMisiController;
use App\Http\Controllers\PrestasiController;
use App\Http\Controllers\ProgramSekolahController;
use App\Http\Controllers\PpdbController;
use App\Http\Controllers\HeaderController;
use App\Models\Header; 
use App\Models\Contact;
use App\Http\Controllers\KurikulumController;
use App\Models\JurnalHarian;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Http\Controllers\JadwalPelajaranController;
use App\Http\Controllers\DataSiswaController;
use App\Http\Controllers\TataTertibSekolahController;





/*
|--------------------------------------------------------------------------
| HALAMAN HOME
|--------------------------------------------------------------------------
*/

Route::get('/', function () {

    $static = public_path('index.html');
    if (file_exists($static)) {
        return response()->file($static);
    }

    $data    = ProfilSekolah::first();
     $contact = Contact::first(); // ← tambah ini
    $headers = Header::where('show_header', true)  // ← tambah ini
                     ->select('header_foto')
                     ->get();

    return view('index', compact('data', 'headers', 'contact')); // ← tambah 'contact' di sini

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

Route::get('/kurikulum', [KurikulumController::class, 'index'])->name('kurikulum');

Route::get('/jurnal/{id}/pdf', function ($id) {

    $jurnal = JurnalHarian::findOrFail($id);

    $pdf = Pdf::loadView('pdf.jurnal', compact('jurnal'));

    return $pdf->download('jurnal-'.$id.'.pdf');

});


// Jadwal Pelajaran
Route::get('/jadwal-pelajaran/kelas/{kelas}', [JadwalPelajaranController::class, 'byKelas']); // ditangkap duluan ✅
Route::get('/jadwal-pelajaran/hari/{hari}',   [JadwalPelajaranController::class, 'byHari']);   // ditangkap duluan ✅
Route::apiResource('jadwal-pelajaran', JadwalPelajaranController::class); // 
Route::get('/jadwal-pelajaran', [JadwalPelajaranController::class, 'jadwal'])
    ->name('jadwal-pelajaran');

Route::get('/data-siswa', [DataSiswaController::class, 'index'])->name('DataSiswa.index');

Route::get('/tata-tertib-sekolah', [TataTertibSekolahController::class, 'index'])
     ->name('tata-tertib-sekolah');

Route::get('/tata-tertib-siswa', [TataTertibSekolahController::class, 'siswa'])
     ->name('tata-tertib-siswa');