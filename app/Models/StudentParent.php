<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudentParent extends Model
{
    protected $fillable = [
        'student_id',
        'type',
        'name',
        'nik',
        'birth_year',
        'education',
        'occupation',
        'monthly_income',
        'special_needs',
    ];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
