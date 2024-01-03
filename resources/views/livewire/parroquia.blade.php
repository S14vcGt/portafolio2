<div>
    <div class="input-container ic1">
        <select name="codigo_estado" class="input" wire:model.live="codigo" placeholder=" ">
            <option value="">Seleccione el estado</option>
            @foreach($estados as $estado)
                <option value="{{$estado->codigo}}">{{$estado->nombre}}</option>
            @endforeach
        </select>
    </div>
    <div class="input-container ic2">
        <select name="codigo_municipio" class="input" wire:model="codigo_mun" placeholder=" ">
            @if ($municipios->count() == 0)
                <option>Seleccione un estado</option>
            @else
                @foreach($municipios as $municipio)
                    <option value="{{$municipio->codigo_mun}}">{{$municipio->nombre}}</option>
                @endforeach
            @endif
        </select>
    </div>
</div>
