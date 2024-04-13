<?php

namespace App\Livewire;

use Illuminate\View\View;
use Livewire\Component;

class SearchBox extends Component
{


    public string $search = '';


    public function update(): void
    {
        $this->dispatch('search', search: $this->search);
    }


    public function render(): View
    {
        return view('livewire.search-box');
    }
}
