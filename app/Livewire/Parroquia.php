<?php

namespace App\Livewire;

use App\Models\Estado;
use App\Models\Municipio;
use Livewire\Component;

class Parroquia extends Component
{
    public $estados;
    public $codigo;
    public $municipios =[];
    public $codigo_mun;
    public function mount()
    {
        $this->estados=Estado::all();
        $this->municipios=collect();
    }
    public function render()
    {
        return view('livewire.parroquia');
    }
    public function updatedCodigo($value): void
    {
        $this->municipios= Municipio::where('codigo_estado','=',$value)->get();
        $this->municipio = $this->municipios->first()->codigo_mun ?? null;
    }
}
