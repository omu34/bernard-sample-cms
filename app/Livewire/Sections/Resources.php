<?php

namespace App\Livewire\Sections;

use Livewire\Component;
use App\Models\Content\Resource;

class Resources extends Component
{
    public $sectiondata;
    public $resources;

    public function mount()
    {
        $this->resources = Resource::latest()->take(8)->get();
    }
    public function render()
    {
        return view('livewire.sections.resources', [
            'sectiondata' => $this->sectiondata,
            'resources' => $this->resources,
        ]);
    }
}
