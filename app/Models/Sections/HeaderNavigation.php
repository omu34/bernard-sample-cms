<?php

namespace App\Models\Sections;

use App\Models\Pages\PageSection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HeaderNavigation extends Model
{
    use HasFactory;

    protected $fillable=[
        'type', 'name', 'link','order'
    ];

    public function page_section()
    {
        return $this->belongsTo(PageSection::class, 'page_section_id');
    }
}
