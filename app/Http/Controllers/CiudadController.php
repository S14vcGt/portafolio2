<?php

namespace App\Http\Controllers;

use App\Models\Ciudad;
use App\Models\Municipio;
use App\Models\Parroquia;
use App\Http\Requests\CiudadRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class CiudadController extends Controller
{
    public function list(): View
    {
        $no_se_tienen_que_llamar_igual = Ciudad::all();
        return view('tableros.ciudades',[
            "domicilio"=>$no_se_tienen_que_llamar_igual
        ]);// tambien, si la variable y el apodo son iguales puedes usar compact('nombre.de.la.variable', ...)
    }

    public function create(CiudadRequest $request):RedirectResponse
    {
        $validated = $request->validate([
            'codigo_cit' => 'unique:ciudads'
        ]);
        Ciudad::create([
            "codigo_cit"=>$request->codigo_cit,
            "nombre"=>$request->nombre,
            "codigo_parroquia"=>$request->codigo_parroquia
        ]);
       return redirect()->route('proyectos')->with('succes','Ciudad guardada con éxito');
    }

    public function filter($codex = null): View
    {
        if ($codex){
            $domicilio= Ciudad::where('codigo_parroquia','=',$codex)->orderBy('codigo_cit')->get();
            return view('tableros.ciudades', compact('domicilio'));
        }else{
            $domicilio= Ciudad::all()->sortBy('codigo_cit');
            return view('tableros.ciudades', compact('domicilio'));
        }
    }

    public function modify($cod_cit): View
    {
        $cit= Ciudad::find($cod_cit);
        $par= Parroquia::find($cit->codigo_parroquia);
        $mun= Municipio::find($par->codigo_municipio);
        return view('formularios.ciudad-mod', compact('cit','par', 'mun'));
    }

    public function update(CiudadRequest $request, $cod): RedirectResponse
    {
        $cit= Ciudad::find($cod);
        $cit->update([
            'nombre'=>$request->nombre
        ]);
        return redirect()->route('proyectos')->with('succes','Ciudad actualizada con éxito');
    }

    Public function delete($cod):RedirectResponse
    {
        $cit= Ciudad::find($cod);
        $cit->delete();
        return redirect()->route('proyectos')->with('succes','Ciudad eliminada con éxito');
    }
}
