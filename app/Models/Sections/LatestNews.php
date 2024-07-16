<?php

namespace App\Models\Sections;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pages\PageSection;
use Illuminate\Database\Eloquent\SoftDeletes;

class LatestNews extends Model
{
    use HasFactory, SoftDeletes;


    protected $fillable = [
        'description',
        'file_path',
        'link',
        'views',
        'likes',
        'is_featured',
        'created_at',
        'updated_at',
    ];

    public function featuredItem()
    {
        return $this->morphOne(FeaturedItems::class, 'item');
    }


    public function page_section()
    {
        return $this->belongsTo(PageSection::class, 'page_section_id');
    }
}
