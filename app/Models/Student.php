<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'nis',
        'name',
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
        'school_class_id',
        'is_active',
    ];

    protected $casts = [
        'has_kip' => 'boolean',
        'will_receive_kip' => 'boolean',
        'birth_date' => 'date',
        'is_active' => 'boolean',
    ];

    public function parents()
    {
        return $this->hasMany(StudentParent::class);
    }

    public function wali()
    {
        return $this->hasOne(StudentWali::class);
    }

    public function schoolClass()
    {
        return $this->belongsTo(SchoolClass::class);
    }

    public function periodic()
    {
        return $this->hasOne(StudentPeriodic::class);
    }

    public function achievements()
    {
        return $this->hasMany(StudentAchievement::class);
    }

    public function scholarships()
    {
        return $this->hasMany(StudentScholarship::class);
    }

    public function welfares()
    {
        return $this->hasMany(StudentWelfare::class);
    }

    public function exit()
    {
        return $this->hasOne(StudentExit::class);
    }
}
