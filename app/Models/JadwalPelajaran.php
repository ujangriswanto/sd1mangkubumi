<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JadwalPelajaran extends Model
{
    use HasFactory;

    // Menentukan nama tabel jika berbeda dengan nama model
    protected $table = 'jadwal_pelajaran';

    // Menentukan kolom mana saja yang dapat diisi (Mass Assignable)
    protected $fillable = [
        'kelas',
        'waktu',
        'pelajaran',
        'jam_ke',
        'hari',
        'tahun_pelajaran',
    ];

    // Menentukan kolom mana yang tidak dapat diisi (Mass Assignable) jika ada
    // protected $guarded = ['id']; // Misalnya jika Anda ingin melindungi kolom ID

    // Menentukan format tanggal, jika ada kolom tanggal
    // protected $dates = ['created_at', 'updated_at'];
}