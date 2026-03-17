<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdministrasiGuru extends Model
{
    protected $fillable = [
        'judul',
        'jenis_file',
        'file',
        'user_id',
        'kelas_id',
        'tahun_ajaran',
        'approved_by',
        'approved_at'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function kelas()
    {
        return $this->belongsTo(SchoolClass::class, 'kelas_id');
    }

    protected static function booted()
    {
        static::creating(function ($data) {
            $data->user_id = auth()->id();
        });
    }
}
