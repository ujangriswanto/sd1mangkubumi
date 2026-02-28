<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudentWali extends Model
{
    protected $fillable = [
        'student_id',
        'name',
        'nik',
        'birth_year',
        'education',
        'occupation',
        'monthly_income',
    ];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
