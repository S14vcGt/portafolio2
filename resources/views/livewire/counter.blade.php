<div class="input-container ic1">
    <select name="codigo_estado" class="input"  placeholder=" ">
        <option value="">Seleccione el estado</option>
        @foreach($estados as $estado)
            <option value="{{$estado->codigo}}">{{$estado->nombre}}</option>
        @endforeach
    </select>
</div>
