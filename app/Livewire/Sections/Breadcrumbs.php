<?php

namespace App\Livewire\Sections;

use Livewire\Component;
use App\Models\Pages\Page;

class Breadcrumbs extends Component
{
    public $section;
    public $breadcrumbs;

    public function mount()
    {
        $this->breadcrumbs = Page::where('id', $this->section->pivot->page_id)->first();
    }

    public function render()
    {
        return view('livewire.sections.breadcrumbs', [
            'breadcrumbs' => $this->breadcrumbs,
        ]);
    }
}
