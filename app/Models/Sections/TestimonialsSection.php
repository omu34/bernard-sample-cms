<?php

namespace App\Models\Sections;

use App\Models\Pages\PageSection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TestimonialsSection extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'page_section_id',
    ];

    public function page_section()
    {
        return $this->belongsTo(PageSection::class, 'page_section_id');
    }
}
