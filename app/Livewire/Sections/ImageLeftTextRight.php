<?php

namespace App\Livewire\Sections;

use Livewire\Component;

class ImageLeftTextRight extends Component
{
    public $sectiondata;

    public function render()
    {
        return view('livewire.sections.image-left-text-right', [
            'sectiondata' => $this->sectiondata,
        ]);
    }
}
