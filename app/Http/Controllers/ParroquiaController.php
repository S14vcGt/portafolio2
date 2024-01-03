<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use App\Models\Parroquia;
use App\Models\Municipio;
use App\Http\Requests\ParroquiaRequest;

class ParroquiaController extends Controller
{
    public function create(ParroquiaRequest $request): RedirectResponse
    {
        $validated = $request->validate([
            'codigo_par' => 'unique:parroquias'
        ]);
        Parroquia::create($request->all());//deben encajar los nombre de las tablas con los nombres de los fomularios
        return redirect()->route('parroquias')->with('succes','Parroquia guradada con éxito');
    }
    public function filter($codex = null): View
    {
        if ($codex){
            $domicilio= Parroquia::where('codigo_municipio','=',$codex)->orderBy('codigo_par')->get();
            return view('tableros.parroquias', compact('domicilio'));
        }else{
            $domicilio= Parroquia::all()->sortBy('codigo_par');
            return view('tableros.parroquias', compact('domicilio'));
        }
    }

    public function modify($cod_par): View//al usar el nomre de la clase laravel automaticamente hace el find
    {
        $par= Parroquia::find($cod_par);
        $mun= Municipio::find($par->codigo_municipio);
        return view('formularios.parroquia-mod', compact('par', 'mun'));
    }

    public function update(ParroquiaRequest $request, $cod): RedirectResponse
    {
        $par= Parroquia::find($cod);
        $par->update([
            'nombre'=>$request->nombre
        ]);
        return redirect()->route('parroquias')->with('succes','Parroquia actualizada con éxito');
    }

    Public function delete($cod): RedirectResponse
    {
        $par= Parroquia::find($cod);
        $par->delete();
        return redirect()->route('parroquias')->with('succes','Parroquia eliminada con éxito');
    }
}
