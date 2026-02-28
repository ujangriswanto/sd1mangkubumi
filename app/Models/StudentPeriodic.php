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
        'distance_from_school',
        'travel_time',
        'sibling_count',
    ];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
