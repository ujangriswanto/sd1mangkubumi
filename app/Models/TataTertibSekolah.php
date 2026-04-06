<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TataTertibSekolah extends Model
{
    use SoftDeletes;

    protected $table = 'tata_tertib_sekolahs';

    protected $fillable = [
        'nama_peraturan', // Judul Aturan
        'isi_peraturan',  // Konten/Detail Aturan
    ];
}