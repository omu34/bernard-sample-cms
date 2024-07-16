<?php

namespace App\Models\Content;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'date',
        'thumbnail',
    ];

    public function images()
    {
        return $this->hasMany(EventImage::class, 'event_id');
    }

    public static function boot()
    {
        parent::boot();

        static::creating(function ($news) {
            $news->slug = Str::slug($news->title);
        });
    }
}
