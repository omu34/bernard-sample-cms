<?php

namespace App\Livewire\Content;

use Livewire\Component;

class Benefits extends Component
{
    public $benefits;

    public function render()
    {
        return view('livewire.content.benefits', [
            'benefits' => $this->benefits,
        ]);
    }
}
