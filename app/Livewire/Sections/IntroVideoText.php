<?php

namespace App\Livewire\Sections;

use Livewire\Component;

class IntroVideoText extends Component
{
    public $sectiondata;

    public function render()
    {
        return view('livewire.sections.intro-video-text', [
            'sectiondata' => $this->sectiondata,
        ]);
    }
}
