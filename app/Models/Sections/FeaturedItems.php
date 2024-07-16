<?php

namespace App\Models\Sections;

use App\Models\Pages\PageSection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FeaturedItems extends Model
{
    use HasFactory, SoftDeletes;
    
    protected $fillable = [
        'item_id',
        'item_type',
    ];


    public function item()
    {
        return $this->morphTo();
    }


    public function page_section()
    {
        return $this->belongsTo(PageSection::class, 'page_section_id');
    }
}
