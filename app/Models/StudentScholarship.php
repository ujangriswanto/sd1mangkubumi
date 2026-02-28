<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudentScholarship extends Model
{
    protected $fillable = [
        'student_id',
        'type',
        'description',
        'start_year',
        'end_year',
    ];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
