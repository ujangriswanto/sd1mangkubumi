<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PpdbSetting extends Model
{
    protected $fillable = [
        'is_open',
        'start_date',
        'end_date',
        'requirements',
        'flow',
        'brochure',
        'registration_link',
    ];

    protected $casts = [
        'is_open' => 'boolean',
        'start_date' => 'date',
        'end_date' => 'date',
    ];
}
