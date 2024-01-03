<?php

namespace App\Http\Controllers;

use App\Models\Municipio;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
Use  App\Http\Requests\MunicipioRequest;

class MunicipioController extends Controller
{

    public function create(MunicipioRequest $request): RedirectResponse
    {
        $validated = $request->validate([
            'codigo_mun' => 'unique:municipios'
        ]);
        Municipio::create($request->all());//deben encajar los nombre de las tablas con los nombres de los fomularios
        return redirect()->route('municipios')->with('succes','Municipio guardado con éxito');
    }
    public function filter($codex = null): View
    {
        if ($codex){
            $domicilio= Municipio::where('codigo_estado','=',$codex)->orderBy('codigo_mun')->get();
            return view('tableros.municipios', compact('domicilio'));
        }else{
            $domicilio= Municipio::all()->sortBy('codigo_mun');
            return view('tableros.municipios', compact('domicilio'));
        }
    }

    public function modify($cod_mun): View//al usar el nomre de la clase laravel automaticamente hace el find
    {
        $mun= Municipio::find($cod_mun);
        return view('formularios.municipio-mod', compact('mun'));
    }

    public function update(MunicipioRequest $request, $cod): RedirectResponse
    {
        $mun= Municipio::find($cod);
        $mun->update([
            'nombre'=>$request->nombre
        ]);
        return redirect()->route('municipios')->with('succes','Municipio actualizado con éxito');
    }

    Public function delete($cod): RedirectResponse
    {
        $mun= Municipio::find($cod);
        $mun->delete();
        return redirect()->route('municipios')->with('succes','Municipio eliminado con éxito');
    }

}
