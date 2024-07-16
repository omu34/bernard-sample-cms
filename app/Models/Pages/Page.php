<?php

namespace App\Models\Pages;

use Illuminate\Support\Str;
use App\Models\Sections\Banner;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Staudenmeir\LaravelAdjacencyList\Eloquent\HasRecursiveRelationships;

class Page extends Model
{
    use HasFactory, HasRecursiveRelationships;

    protected $fillable = [
        'name',
        'slug',
        'description',
        'keywords',
        'meta',
        'thumbnail',
    ];

    public function sections()
    {
        return $this->belongsToMany(Section::class)->withPivot('order','id')->orderBy('order');
    }

    // public function sections(): BelongsToMany
    // {
    //     return $this->belongsToMany(Section::class, 'page_sections')
    //         ->withPivot(['order', 'id'])
    //         ->orderBy('order');
    // }

    public function banners()
    {
        return $this->hasMany(Banner::class);
    }

    public static function boot()
    {
        parent::boot();

        static::creating(function ($page) {
            $page->slug = Str::slug($page->name);
        });
    }
}
