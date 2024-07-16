<?php

namespace App\Livewire\Sections;

use Livewire\Component;

class ContactForm extends Component
{
    public $sectiondata;

    public function render()
    {
        return view('livewire.sections.contact-form', [
            'sectiondata' => $this->sectiondata,
        ]);
    }
}
