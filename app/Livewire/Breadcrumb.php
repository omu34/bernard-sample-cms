<?php

namespace App\Livewire;

use Livewire\Component;

class Breadcrumb extends Component
{
    public string $selectedLink = 'single-page';

    public function render()
    {
        $links = [
            'single-page' => 'Main Page',
            'single-gallery' => 'Gallery',
            'single-video' => 'Videos',
            'single-media' => 'Media',
        ];

        return view('livewire.breadcrumb', [
            'links' => $links,
            'selectedLink' => $this->selectedLink,
        ]);
    }

    // public function updateLink($link)
    // {
    //     $this->selectedLink = $link;
    //     $this->dispatch('linkUpdated', $link);
    // }
    public function updateLink($link)
{
    $this->selectedLink = $link;

    return redirect()->route($link); // Replace 'link' with your actual route name
}
}
