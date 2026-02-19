<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProfilSekolah extends Model
{
    protected $fillable = [
        'school_name',
        'logo',
        'headmaster_name',
        'headmaster_photo',
        'history',
        'vision',
        'mission',
    ];
}
