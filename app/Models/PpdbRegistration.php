<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PpdbRegistration extends Model
{
    protected $fillable = [
        'student_name',
        'gender',
        'nisn',
        'nik',
        'no_kk',
        'birth_date',
        'no_akta_lahir',
        'religion',
        'citizenship',
        'special_needs',
        'residence_type',
        'transportation',
        'child_order',
        'has_kip',
        'will_receive_kip',
        'kip_reject_reason',
        'phone',
        'address',
        'status',
        'admin_note',
        'kk_file',
        'kip_file',
    ];

    protected $casts = [
        'birth_date' => 'date',
    ];

    public function parents()
    {
        return $this->hasMany(PpdbParent::class);
    }

    public function wali()
    {
        return $this->hasOne(PpdbWali::class);
    }
}
