<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Beritas extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'thumbnail',
        'content',
        'category',
        'published_at',
        'is_published',
    ];

    protected $casts = [
        'published_at' => 'datetime',
        'is_published' => 'boolean',
    ];
}
