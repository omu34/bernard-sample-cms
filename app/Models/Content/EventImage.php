<?php

namespace App\Models\Content;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class EventImage extends Model
{
    use HasFactory;

    protected $fillable = [
        'url',
        'event_id',
    ];

    public function event()
    {
        return $this->belongsTo(Event::class);
    }
}
