<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudentWelfare extends Model
{
    protected $fillable = [
        'student_id',
        'type',
        'card_number',
        'card_name',
    ];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
