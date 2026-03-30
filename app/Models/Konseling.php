<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Konseling extends Model
{
    protected $fillable = [
        'student_id',
        'tanggal',
        'jenis',
        'masalah',
        'tindakan',
        'status',
    ];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
