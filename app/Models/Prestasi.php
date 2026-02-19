<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Prestasi extends Model
{
    protected $fillable = [
        'title',
        'level',
        'winner_name',
        'photo',
        'date',
        'description',
        'is_active',
        'sort_order',
    ];

    protected $casts = [
        'date' => 'date',
        'is_active' => 'boolean',
    ];
}
