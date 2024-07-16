<?php

namespace App\Models\Content;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'date',
        'url',
        'thumbnail',
    ];

    protected $casts = [
        'date' => 'datetime',
    ];
}
