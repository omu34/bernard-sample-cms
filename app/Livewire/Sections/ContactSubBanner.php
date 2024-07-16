<?php

namespace App\Livewire\Sections;

use Livewire\Component;
use App\Models\Content\Contact;

class ContactSubBanner extends Component
{
    public $sectiondata;
    public $contacts;

    public function mount()
    {
        $this->contacts = Contact::all();
    }

    public function render()
    {
        return view('livewire.sections.contact-sub-banner', [
            'sectiondata' => $this->sectiondata,
            'contacts' => $this->contacts,
        ]);
    }
}
