@extends('layouts.tablero')

@section('lista')
    <div class="listab">
        <div class='titlex'>Lista de ciudades registradas</div>
        <a class="a_button" href="{{route('ciudad.crear')}}">Agregar nueva ciudad</a>
        <ul class="mostar2">
            @forelse($domicilio as $citys)
                <li class="mostrar">
                    <a class="a_tab" href="#">{{$citys->codigo_cit}}: {{$citys-> nombre}}</a> |
                    <div class="list_bttn">
                        <a  class="a_tab" href="{{route('ciudad.modify',$citys->codigo_cit)}}">
                            <img src="{{asset('assets/images/editar.png')}}" width="30px">
                        </a> |
                        <form method="POST" action="{{route('ciudad.delete',$citys->codigo_cit)}}">
                            @method('DELETE')
                            @csrf
                            <input type="image" src="{{asset('assets/images/marca-x.png')}}" width="30px"/>
                        </form>
                    </div>
                </li>
            @empty
                <p>No hay ciudades registradas</p>
            @endforelse
        </ul>
    </div>
@endsection
