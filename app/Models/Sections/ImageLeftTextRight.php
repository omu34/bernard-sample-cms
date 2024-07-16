<?php

namespace App\Models\Sections;

use App\Models\Pages\PageSection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class ImageLeftTextRight extends Model
{
    use HasFactory;

    protected $fillable = [
        'page_section_id',
        'image',
        'description',
    ];

    public function page_section()
    {
        return $this->belongsTo(PageSection::class, 'page_section_id');
    }
}
