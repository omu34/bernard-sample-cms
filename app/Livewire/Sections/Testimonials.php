<?php

namespace App\Livewire\Sections;

use Livewire\Component;
use App\Models\Content\Testimonial;

class Testimonials extends Component
{
    public $sectiondata;
    public $testimonials;

    public function mount()
    {
        $this->testimonials = Testimonial::latest()->take(4)->get();
    }

    public function render()
    {
        return view('livewire.sections.testimonials', [
            'sectiondata' => $this->sectiondata,
            'testimonials' => $this->testimonials,
        ]);
    }
}
