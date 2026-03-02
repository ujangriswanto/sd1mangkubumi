<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; // Pastikan kita menggunakan SoftDeletes jika ingin mendukung soft deletes

class Header extends Model
{
    use SoftDeletes; // Menambahkan soft deletes untuk model ini

    protected $fillable = [
        'nama_foto',     // Nama foto
        'header_foto',   // Gambar thumbnail
        'show_header',   // Menampilkan header / thumbnail
    ];

    // Untuk mengonfigurasi kolom image dan disk, kita bisa menggunakan accessor dan mutator
    public function getHeaderFotoUrlAttribute()
    {
        return asset('storage/' . $this->header_foto);
    }
}