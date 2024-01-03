<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Estado;
use App\Models\Municipio;
use App\Models\Parroquia;

class Ciudad extends Component
{
    public $estados;
    public $codigo;
    public $municipios =[];
    public $codigo_mun;
    public $parroquias=[];
    public $codigo_par;
    public function mount()
    {
        $this->estados=Estado::orderby('codigo')->get();
        $this->municipios=collect();
        $this->parroquias=collect();
    }

    public function render()
    {
        if(!empty($this->codigo_mun))
            $this->parroquias= Parroquia::where('codigo_municipio','=',$this->codigo_mun)->orderby('codigo_par')->get();
        else
            if(!empty($this->codigo))
                $this->municipios= Municipio::where('codigo_estado','=',$this->codigo)->orderby('codigo_mun')->get();
        return view('livewire.ciudad', [
            'municipios' => $this->municipios,
            'parroquias' => $this->parroquias,
        ]);
    }
}
