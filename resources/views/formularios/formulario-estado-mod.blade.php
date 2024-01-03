@extends('layouts.formularios')
@section('titlex', 'Modificar estado')

@section('bodyx')
    <a href="{{route('estado')}}">
        <img src="{{asset('assets/images/descarga-arrow.png')}}">
    </a>
    <form class="formulario" method="POST" action="{{route('estado.up', $state->codigo)}}"
          style="height: 290px; width: 450px">
        @method('PUT')
        @csrf
        <div class="title">Modificar estado</div>
        <div class="input-container ic1">
            <input id="codigo" name="codigo" class="input" type="text" value="{{$state->codigo}}" placeholder=" "
                   readonly/>
            <div class="cut"></div>
            <label for="codigo" class="placeholder">Código</label>
        </div>
        <div class="input-container ic2">
            <input id="nombre" name="nombre" class="input" type="text" value="{{$state->nombre}}" placeholder=" "/>
            <div class="cut"></div>
            @error('nombre')
            <label for="nombre" class="placeholder" style="color: blueviolet">{{$message}}</label>
            @else
                <label for="nombre" class="placeholder">Nombre</label>
                @enderror
        </div>
        <button type="text" class="submit">Guardar</button>
    </form>
@endsection
