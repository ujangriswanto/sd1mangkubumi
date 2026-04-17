<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudentPeriodic extends Model
{
    protected $fillable = [
        'student_id',
        'height',
        'weight',
        'head_circumference',
        'distance_to_school',
        'travel_time',
        'siblings_count',
    ];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
