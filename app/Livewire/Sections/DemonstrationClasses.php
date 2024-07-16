<?php

namespace App\Livewire\Sections;

use Livewire\Component;

class DemonstrationClasses extends Component
{
    public $sectiondata;

    public function render()
    {
        return view('livewire.sections.demonstration-classes', [
            'sectiondata' => $this->sectiondata,
        ]);
    }
}
