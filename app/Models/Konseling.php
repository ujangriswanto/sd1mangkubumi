<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Konseling extends Model
{
    protected $fillable = [
        'student_id',
        'tanggal',
        'jenis',
        'uraian_masalah',
        'bimbingan_individu',
        'bimbingan_kelompok',
        'penyelesaian',
        'tindak_lanjut',
        'status',
    ];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
