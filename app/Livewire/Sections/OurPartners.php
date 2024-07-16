<?php

namespace App\Livewire\Sections;

use Livewire\Component;
use App\Models\Content\Partner;

class OurPartners extends Component
{
    public $sectiondata;
    public $partners;

    public function mount()
    {
        $this->partners = Partner::all();
    }

    public function render()
    {
        return view('livewire.sections.our-partners', [
            'sectiondata' => $this->sectiondata,
            'partners' => $this->partners,
        ]);
    }
}
