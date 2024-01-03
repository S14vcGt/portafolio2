@extends('layouts.formularios')
@section('titlex', 'Nuevo estado')

@section('bodyx')
    <a href="{{route('estado')}}">
        <img src="{{asset('assets/images/descarga-arrow.png')}}" href>
    </a>
    <form class="formulario" method="POST" action="{{route('estado.guardar')}}" style="height: 290px; width: 450px">
        @csrf
        <div class="title">Agregar nuevo estado</div>
        <div class="input-container ic1">
            <input id="codigo" name="codigo" class="input" type="text" placeholder=" "/>
            @error('codigo')
                <div class="cut" style="width: 230px"></div>
                <label for="codigo" class="placeholder" style="color: blueviolet">{{$message}}</label>
            @else
                <div class="cut"></div>
                <label for="codigo" class="placeholder">Código</label>
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

