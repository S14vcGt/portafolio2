<?php

namespace App\Livewire;

use App\Models\Estado;
use Livewire\Component;

class Counter extends Component
{
    public $estados;
    public function mount()
    {
        $this->estados=Estado::all();
    }
    public function render()
    {
        return view('livewire.counter');
    }
}
