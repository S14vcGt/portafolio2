@extends('layouts.tablero')

@section('lista')
    <div class="listab">
        <div class='titlex'>Lista de municipios registrados</div>
        <a class="a_button" href="{{route('municipio.crear')}}">Agregar nuevo municipio</a>
        <ul class="mostar2">
            @forelse($domicilio as $citys)
                <li class="mostrar">
                    <a class="a_tab" href="{{route('municipio.show',$citys->codigo_mun)}}">{{$citys->codigo_mun}}: {{$citys-> nombre}}</a> |
                    <div class="list_bttn">
                        <a  class="a_tab" href="{{route('municipio.modify',$citys->codigo_mun)}}">
                            <img src="{{asset('assets/images/editar.png')}}" width="30px">
                        </a> |
                        <form method="POST" action="{{route('municipio.delete',$citys->codigo_mun)}}">
                            @method('DELETE')
                            @csrf
                            <input type="image" src="{{asset('assets/images/marca-x.png')}}" width="30px"/>
                        </form>
                    </div>
                </li>
            @empty
                <p>No hay municipios registrados</p>
            @endforelse
        </ul>
    </div>
@endsection
