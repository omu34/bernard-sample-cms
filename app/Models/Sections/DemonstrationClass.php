<?php

namespace App\Models\Sections;

use App\Models\Pages\PageSection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DemonstrationClass extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'image',
        'button_text',
        'page_section_id',
    ];

    public function page_section()
    {
        return $this->belongsTo(PageSection::class, 'page_section_id');
    }
}
