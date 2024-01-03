@extends('layouts.formularios')
@section('titlex', 'Modificar ciudad')

@section('bodyx')
    <a href="{{route('proyectos')}}">
        <img src="{{asset('assets/images/descarga-arrow.png')}}">
    </a>
    <form class="formulario" method="POST" action="{{route('ciudad.up', $cit->codigo_cit)}}" style="height: 525px; width: 450px">
        @method('PUT')
        @csrf
        <div class="title">Modificar ciudad</div>
        <div class="input-container ic1">
            <input id="codigo" name="codigo_estado" class="input" type="text" value="{{$mun->codigo_estado}}" placeholder=" "
                   readonly/>
            <div class="cut" style="width: 115px"></div>
            <label for="codigo" class="placeholder">Código del estado</label>
        </div>
        <div class="input-container ic2">
            <input id="codigo_mun" name="codigo_mun" class="input" type="text" value="{{$mun->codigo_mun}}" placeholder=" "
                   readonly/>
            <div class="cut" style="width: 135px"></div>
            <label for="codigo_mun" class="placeholder">Código del municipio</label>
        </div>
        <div class="input-container ic2">
            <input id="codigo_par" name="codigo_parroquia" class="input" type="text" value="{{$cit->codigo_parroquia}}" placeholder=" "
                   readonly/>
            <div class="cut" style="width: 145px"></div>
            <label for="codigo_par" class="placeholder">Código de la parroquia</label>
        </div>
        <div class="input-container ic2">
            <input id="codigo_cit" name="codigo_cit" class="input" type="text" value="{{$cit->codigo_cit}}" placeholder=" "
                   readonly/>
            <div class="cut" style="width: 125px"></div>
            <label for="codigo_cit" class="placeholder">Código de la ciudad</label>
        </div>
        <div class="input-container ic2">
            <input id="nombre" name="nombre" class="input" type="text" value="{{$cit->nombre}}" placeholder=" "/>
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
