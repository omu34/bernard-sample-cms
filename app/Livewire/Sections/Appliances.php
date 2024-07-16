<?php

namespace App\Livewire\Sections;

use Livewire\Component;
use App\Models\Content\Appliance;

class Appliances extends Component
{
    public $sectiondata;
    public $appliances;

    public function mount()
    {
        $this->appliances = Appliance::latest()->take(4)->get();
    }

    public function render()
    {
        return view('livewire.sections.appliances', [
            'sectiondata' => $this->sectiondata,
            'appliances' => $this->appliances,
        ]);
    }
}
