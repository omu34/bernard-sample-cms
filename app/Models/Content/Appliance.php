<?php

namespace App\Models\Content;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Appliance extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'title',
        'button_text',
        'button_url',
    ];
}
