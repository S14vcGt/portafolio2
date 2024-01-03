@extends('layouts.tablero')

@section('lista')
    <div class="listab">
        <div class='titlex'>Lista de estados registrados</div>
        <a class="a_button" href="{{route('estado.crear')}}">Agregar nuevo estado</a>
        <ul class="mostar2">
            @forelse($domicilio as $citys)
                <li class="mostrar">
                    <a class="a_tab" href="{{route('estado.show',$citys->codigo)}}">{{$citys->codigo}}: {{$citys-> nombre}}</a> |
                    <div class="list_bttn">
                        <a  class="a_tab" href="{{route('estado.modify',$citys->codigo)}}">
                            <img src="{{asset('assets/images/editar.png')}}" width="30px">
                        </a> |
                        <form method="POST" action="{{route('estado.delete',$citys->codigo)}}">
                            @method('DELETE')
                            @csrf
                            <input type="image" src="{{asset('assets/images/marca-x.png')}}" width="30px"/>
                        </form>
                    </div>
                    </form>
                </li>
            @empty
                <p>No hay estados registrados</p>
            @endforelse
        </ul>
    </div>
@endsection
