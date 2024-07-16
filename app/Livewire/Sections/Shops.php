<?php

namespace App\Livewire\Sections;

use Livewire\Component;
use App\Models\Content\Shop;

class Shops extends Component
{
    public $sectiondata;
    public $shops;

    public function mount()
    {
        $this->shops = Shop::all();
    }

    public function render()
    {
        return view('livewire.sections.shops', [
            'sectiondata' => $this->sectiondata,
            'shops' => $this->shops,
        ]);
    }
}
