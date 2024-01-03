@extends('proyectos')

@section('tablero')
    <div class='tablero'>
        <link rel="stylesheet" href="{{asset('assets/css/tablero.css')}}">
        <div class="left_board">
            @include('layouts.partials.mensajes')
            <div class="sidebar">
                <ul>
                    <li class="sidemenu">
                        <a class="a_tab" href="{{route('estado')}}">Estados</a>
                    </li>
                    <li class="sidemenu">
                        <a class="a_tab" href="{{route('municipios')}}">Muncipios</a>
                    </li>
                    <li class="sidemenu">
                        <a class="a_tab" href="{{route('parroquias')}}">Parroquias</a>
                    </li>
                    <li class="sidemenu">
                        <a class="a_tab" href="{{route('proyectos')}}">Ciudades</a>
                    </li>
                </ul>
            </div>
        </div>
        @yield('lista')
    </div>
@endsection
