<?php

namespace App\Livewire\Sections;

use App\Models\Sections\HeaderNavigation as ModelsHeaderNavigation;
use Livewire\Component;

class HeaderNavigation extends Component
{

    public $selectedNavbar = 'main';

    public $items;

    public function mount()
    {
        $this->loadNavbarItems();
    }

    public function updatedSelectedNavbar()
    {
        $this->loadNavbarItems();
    }

    public function loadNavbarItems()
    {
        $this->items = ModelsHeaderNavigation::where('type', $this->selectedNavbar)->orderBy('order')->get();
    }



    public function render()
    {
        return view('livewire.sections.header-navigation', [
            'items' => $this->items,
            'selectedNavbar' => $this->selectedNavbar
        ]);
    }
}


// namespace App\Livewire;

// use Livewire\Component;

// use App\Models\Navbar;
// use App\Models\Sections\HeaderNavigation as SectionsHeaderNavigation;

// class HeaderNavigation extends Component
// {
//     public $selectedNavbar = 'main'; // Default selection
//     public $items;

//     public function mount()
//     {
//         $this->loadNavbarItems();
//     }

//     public function updatedSelectedNavbar()
//     {
//         $this->loadNavbarItems();
//     }

//     public function loadNavbarItems()
//     {
//         $this->items = SectionsHeaderNavigation::where('type', $this->selectedNavbar)->orderBy('order')->get();
//     }

//     public function render()
//     {
//         return view('livewire.sections.hearder-navigation', [
//             'items' => $this->items,
//             'selectedNavbar' => $this->selectedNavbar
//         ]);
//     }
// }






