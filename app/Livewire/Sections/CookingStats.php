<?php

namespace App\Livewire\Sections;

use Livewire\Component;
use App\Models\Content\Stats;

class CookingStats extends Component
{
    public $sectiondata;
    public $stats;

    public function mount()
    {
        $this->stats = Stats::all();
    }

    public function render()
    {
        return view('livewire.sections.cooking-stats', [
            'sectiondata' => $this->sectiondata,
            'stats' => $this->stats,
        ]);
    }
}
