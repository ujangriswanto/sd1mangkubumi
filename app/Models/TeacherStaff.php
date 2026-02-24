<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TeacherStaff extends Model
{
    protected $table = 'teacher_staff';

    protected $fillable = [
        'name',
        'position',
        'nip',
        'photo',
        'bio',
        'is_active',
        'sort_order',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];
}
