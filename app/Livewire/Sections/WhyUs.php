<?php

namespace App\Livewire\Sections;

use Livewire\Component;
use App\Models\Content\Benefit;

class WhyUs extends Component
{
    public $sectiondata;
    public $benefits;

    public function mount()
    {
        $this->benefits = Benefit::all();
    }

    public function render()
    {
        return view('livewire.sections.why-us', [
            'sectiondata' => $this->sectiondata,
            'benefits' => $this->benefits,
        ]);
    }
}
