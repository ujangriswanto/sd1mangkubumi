<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdministrasiKepsek extends Model
{
    protected $fillable = [
        'judul',
        'jenis_file',
        'file',
        'tahun_ajaran',
        'created_by',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    protected static function booted()
    {
        static::creating(function ($data) {
            $data->created_by = auth()->id();
        });
    }
}
