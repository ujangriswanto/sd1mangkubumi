<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    protected $fillable = [
        'student_id',
        'subject_id',
        'school_class_id',
        'semester',
        'tahun_ajaran',
        'uts',
        'uas',
    ];

    protected $with = ['details']; // penting buat filament

    // RELASI
    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }

    public function schoolClass()
    {
        return $this->belongsTo(SchoolClass::class);
    }

    public function details()
    {
        return $this->hasMany(GradeDetail::class);
    }

    // ACCESSOR
    public function getRataRataAttribute()
    {
        return $this->details->avg('score') ?? 0;
    }

    public function getNilaiRaporAttribute()
    {
        return round((
            ($this->rata_rata ?? 0) +
            ($this->uts ?? 0) +
            ($this->uas ?? 0)
        ) / 3);
    }
}