<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use App\Models\Estado;
use Illuminate\View\View;
use App\Http\Requests\EstadoRequest;

class EstadoController extends Controller
{
    public function list(): View
    {
        $domicilio= Estado::all()->sortBy('codigo');
        return view('tableros.estados', compact('domicilio'));
    }

    public function create(EstadoRequest $request): RedirectResponse
    {
        $validated = $request->validate([
            'codigo' => 'unique:estados'
        ]);
       $estado = new Estado;
       $estado->codigo = $request->codigo;
       $estado->nombre = $request->nombre;
       $estado->save();
       //tengo que ver como hacer un anuncio cuando se guardaron los datos
       return redirect()->route('estado')->with('succes','Estado guardado con éxito');
    }

    public function modify($cod): View
    {
        $state= Estado::find($cod);
        return view('formularios.formulario-estado-mod', compact('state'));
    }

    public function update(EstadoRequest $request, $cod): RedirectResponse
    {
        $estado= Estado::find($cod);
        $estado->update([
            'nombre'=>$request->nombre
        ]);

        return redirect()->route('estado')->with('succes','Estado actualizado con éxito');
    }

    public function delete($cod): RedirectResponse
    {
        $state= Estado::find($cod);
        $state->delete();
        return redirect()->route('estado')->with('succes','Estado eliminado con éxito');
    }
}
