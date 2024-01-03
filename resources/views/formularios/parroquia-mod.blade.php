@extends('layouts.formularios')
@section('titlex', 'Modificar parroquia')

@section('bodyx')
    <a href="{{route('parroquias')}}">
        <img src="{{asset('assets/images/descarga-arrow.png')}}">
    </a>
    <form class="formulario" method="POST" action="{{route('parroquia.up', $par->codigo_par)}}" style="height: 440px; width: 450px">
        @method('PUT')
        @csrf
        <div class="title">Modificar parroquia</div>
        <div class="input-container ic1">
            <input id="codigo" name="codigo_estado" class="input" type="text" value="{{$mun->codigo_estado}}" placeholder=" "
                   readonly/>
            <div class="cut" style="width: 115px"></div>
            <label for="codigo" class="placeholder">Código del estado</label>
        </div>
        <div class="input-container ic2">
            <input id="codigo_mun" name="codigo_municipio" class="input" type="text" value="{{$par->codigo_municipio}}" placeholder=" "
                   readonly/>
            <div class="cut" style="width: 135px"></div>
            <label for="codigo_mun" class="placeholder">Código del municipio</label>
        </div>
        <div class="input-container ic2">
            <input id="codigo_par" name="codigo_par" class="input" type="text" value="{{$par->codigo_par}}" placeholder=" "
                   readonly/>
            <div class="cut" style="width: 145px"></div>
            <label for="codigo_par" class="placeholder">Código de la parroquia</label>
        </div>
        <div class="input-container ic2">
            <input id="nombre" name="nombre" class="input" type="text" value="{{$par->nombre}}" placeholder=" "/>
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

