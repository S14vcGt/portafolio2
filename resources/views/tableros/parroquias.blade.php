@extends('layouts.tablero')

@section('lista')
    <div class="listab">
        <div class='titlex'>Lista de parroquias registradas</div>
        <a class="a_button" href="{{route('parroquia.crear')}}">Agregar nueva parroquia</a>
        <ul class="mostar2">
            @forelse($domicilio as $citys)
                <li class="mostrar">
                    <a class="a_tab" href="{{route('parroquia.show',$citys->codigo_par)}}">{{$citys->codigo_par}}: {{$citys-> nombre}}</a> |
                    <div class="list_bttn">
                        <a  class="a_tab" href="{{route('parroquia.modify',$citys->codigo_par)}}">
                            <img src="{{asset('assets/images/editar.png')}}" width="30px">
                        </a> |
                        <form method="POST" action="{{route('parroquia.delete',$citys->codigo_par)}}">
                            @method('DELETE')
                            @csrf
                            <input type="image" src="{{asset('assets/images/marca-x.png')}}" width="30px"/>
                        </form>
                    </div>
                </li>
            @empty
                <p>No hay parroquias registradas</p>
            @endforelse
        </ul>
    </div>
@endsection
