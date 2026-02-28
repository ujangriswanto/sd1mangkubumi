<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PpdbWali extends Model
{
    protected $fillable = [
        'ppdb_registration_id',
        'name',
        'nik',
        'birth_year',
        'education',
        'occupation',
        'monthly_income',
    ];

    public function registration()
    {
        return $this->belongsTo(PpdbRegistration::class);
    }
}
