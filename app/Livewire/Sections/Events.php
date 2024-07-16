<?php

namespace App\Livewire\Sections;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Content\Event;

class Events extends Component
{
    use WithPagination;

    public $sectiondata;
    public $query = '';

    public function search()
    {
        $this->validate([
            'query' => 'required|min:3',
        ]);

        $this->resetPage();
    }

    public function render()
    {
        return view('livewire.sections.events', [
            'sectiondata' => $this->sectiondata,
            'events' => Event::where('title', 'like', '%' . $this->query . '%')->paginate(12)
        ]);
    }
}
