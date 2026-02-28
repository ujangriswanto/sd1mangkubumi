<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudentExit extends Model
{
    protected $fillable = [
        'student_id',
        'reason',
        'exit_date',
        'description',
    ];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
