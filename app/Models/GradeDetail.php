<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GradeDetail extends Model
{
    protected $fillable = [
        'grade_id',
        'type',
        'score',
    ];

    public function grade()
    {
        return $this->belongsTo(Grade::class);
    }
}
