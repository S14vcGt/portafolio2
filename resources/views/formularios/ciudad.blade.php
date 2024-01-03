@extends('layouts.formularios')
@section('titlex', 'Nueva ciudad')

@section('bodyx')
    <a href="{{route('proyectos')}}" style="scroll-margin-top: 130px">
        <img src="{{asset('assets/images/descarga-arrow.png')}}" href>
    </a>
    <form class="formulario" method="POST" action="{{route('ciudad.guardar')}}" style="height: 525px; width: 440px">
        @csrf
        <div class="title">Agregar nueva ciudad</div>
        @livewire('ciudad')
        <div class="input-container ic2">
            <input id="codigo_cit" name="codigo_cit" class="input" type="text" placeholder=" "/>
            @error('codigo_cit')
                <div class="cut" style="width: 230px"></div>
                <label for="codigo_cit" class="placeholder" style="color: blueviolet">{{$message}}</label>
            @else
                <div class="cut"></div>
                <label for="codigo_cit" class="placeholder">Código</label>
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
