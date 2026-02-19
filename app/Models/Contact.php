<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'address',
        'phone',
        'email',
        'whatsapp',
        'google_maps_link',
        'instagram',
        'facebook',
        'youtube',
        'working_hours',
    ];
}
