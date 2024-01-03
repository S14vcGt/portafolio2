@extends('layouts.landing')
@section('title','Proyectos')

@section('body')
<section id='hero'>

    @yield('tablero')

    <div class="index_title" style="width: 800px; align-self: center">
        <p style="font-size: 1.3rem; text-align: justify; line-height: 1.5; margin-top: 10px; margin-right: 10px; margin-bottom: 15px; margin-left: 10px">
            Este es un pequeño CRUD que elabore, para la universidad he colaborado en aplicaciones más grandes,
            tambien escritas en PHP, pero sin el uso de Laravel. En este caso, se trata de una base de datos
            sobre las entidades federales del país y las ciudades que poseen,
            los estados, municipios y parroquias. Hecho en Laravel 10.33, este CRUD te permite conocer que municipios le
            pertenecen a que estado, que parroquias a que municipios y así, al darle click en el nombre de la entidad se despliega
            una lista de las entidades asociadas a esa. También se puede actualizar el nombre de cada una de los estados, municipios,
            parroquias y ciudades, así como crear o eliminar cualquiera de estos. Si bien es un proyecto diminuto,
            tiene algunas cosas interesantes, por ejemplo, para hacer los selects dependientes de los formularios de los
            municipios, parroquias y ciudades fue necesario el uso de una librería de programación reactiva, Livewire,
            lo que en realidad fue una experiencia nueva. Obviamente puede estar mucho mejor
            pero creo que cumple con su propósito y aprendí mucho de Laravel realizándolo.
        </p>
    </div>
    <div style="text-align: center; margin-top: 100px">
        <img src="{{asset('assets/images/Captura de pantalla (66).png')}}" alt="DER" width="650px">
        <h2 style="margin: 30px"> El diagrama Entidad-Relacion de la base de datos</h2>
    </div>
</section>
@endsection
