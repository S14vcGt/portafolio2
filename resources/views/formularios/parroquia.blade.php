@extends('layouts.formularios')
@section('titlex', 'Nueva parroquia')

@section('bodyx')
    <a href="{{route('parroquias')}}">
        <img src="{{asset('assets/images/descarga-arrow.png')}}" href>
    </a>
    <form class="formulario" method="POST" action="{{route('parroquia.guardar')}}" style="height: 440px; width: 485px">
        @csrf
        <div class="title">Agregar nueva parroquia</div>
        @livewire('parroquia')
        <div class="input-container ic2">
            <input id="codigo_par" name="codigo_par" class="input" type="text" placeholder=" "/>
            @error('codigo_par')
            <div class="cut" style="width: 230px"></div>
            <label for="codigo_par" class="placeholder" style="color: blueviolet">{{$message}}</label>
            @else
                <div class="cut"></div>
                <label for="codigo_par" class="placeholder">Código</label>
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

