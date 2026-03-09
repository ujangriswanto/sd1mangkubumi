<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PpdbParent extends Model
{
    protected $fillable = [
        'ppdb_registration_id',
        'type',
        'name',
        'nik',
        'birth_year',
        'education',
        'occupation',
        'monthly_income',
        'special_needs',
    ];

    public function registration()
    {
        return $this->belongsTo(PpdbRegistration::class);
    }
}
