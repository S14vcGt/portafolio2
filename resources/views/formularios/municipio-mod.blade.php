@extends('layouts.formularios')
@section('titlex', 'Modificar municipio')

@section('bodyx')
    <a href="{{route('municipios')}}">
        <img src="{{asset('assets/images/descarga-arrow.png')}}">
    </a>
    <form class="formulario" method="POST" action="{{route('municipio.up', $mun->codigo_mun)}}" style="height: 360px; width: 450px">
        @method('PUT')
        @csrf
        <div class="title">Modificar municipio</div>
        <div class="input-container ic1">
            <input id="codigo" name="codigo_estado" class="input" type="text" value="{{$mun->codigo_estado}}" placeholder=" "
                   readonly/>
            <div class="cut" style="width: 120px "></div>
            <label for="codigo" class="placeholder">Código del estado</label>
        </div>
        <div class="input-container ic2">
            <input id="codigo_mun" name="codigo_mun" class="input" type="text" value="{{$mun->codigo_mun}}" placeholder=" "
                   readonly/>
            <div class="cut" style="width: 135px "></div>
            <label for="codigo_mun" class="placeholder">Código del municipio</label>
        </div>
        <div class="input-container ic2">
            <input id="nombre" name="nombre" class="input" type="text" value="{{$mun->nombre}}" placeholder=" "/>
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
