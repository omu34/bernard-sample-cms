<?php

namespace App\Models\Content;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class QuickLink extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'url',
    ];
}
