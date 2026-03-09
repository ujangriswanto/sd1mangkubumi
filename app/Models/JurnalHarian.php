<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JurnalHarian extends Model
{
    protected $fillable = [
        'user_id',
        'teacher_staff_id',
        'school_class_id',
        'semester',
        'tanggal',
        'judul_pembelajaran',
        'materi_pokok',
        'kegiatan',
        'penilaian',
    ];

    protected $casts = [
        'tanggal' => 'date',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function teacherStaff()
    {
        return $this->belongsTo(TeacherStaff::class);
    }

    public function schoolClass()
    {
        return $this->belongsTo(SchoolClass::class);
    }
}
