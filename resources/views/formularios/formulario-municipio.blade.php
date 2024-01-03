@extends('layouts.formularios')
@section('titlex', 'Nuevo municipio')

@section('bodyx')
    <a href="{{route('municipios')}}">
        <img src="{{asset('assets/images/descarga-arrow.png')}}" href>
    </a>
    <form class="formulario" method="POST" action="{{route('municipio.guardar')}}" style="height: 360px; width: 485px">
        @csrf
        <div class="title">Agregar nuevo municipio</div>
        @livewire('counter')
        <div class="input-container ic2">
            <input id="codigo_mun" name="codigo_mun" class="input" type="text" placeholder=" "/>
                @error('codigo_mun')
                    <div class="cut" style="width: 240px"></div>
                    <label for="codigo_mun" class="placeholder" style="color: blueviolet">{{$message}}</label>
                @else
                    <div class="cut"></div>
                    <label for="codigo_mun" class="placeholder">Código</label>
                @enderror
        </div>
        <div class="input-container ic2">
            <input id="nombre" name="nombre" class="input" type="text" placeholder=" "/>
                @error('nombre')
                    <div class="cut" style="width: 270px"></div>
                    <label for="nombre" class="placeholder" style="color: blueviolet">{{$message}}</label><!-- Error --!>
                @else
                    <div class="cut"></div>
                    <label for="nombre" class="placeholder">Nombre</label>
                @enderror
        </div>
        <button type="text" class="submit">Guardar</button>
    </form>
@endsection
