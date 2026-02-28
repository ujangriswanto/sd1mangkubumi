<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SchoolClass extends Model
{
    protected $fillable = [
        'name',
        'grade_level',
        'teacher_staff_id',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    public function teacher()
    {
        return $this->belongsTo(TeacherStaff::class, 'teacher_staff_id');
    }

    public function students()
    {
        return $this->hasMany(Student::class);
    }
}
