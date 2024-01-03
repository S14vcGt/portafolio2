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
        <select name="codigo_municipio" class="input" wire:model.live="codigo_mun" placeholder=" ">
            @if ($municipios->count() == 0)
                <option>Seleccione un estado</option>
            @else
                <option disabled>Seleccione el municipio</option>
                @foreach($municipios as $municipio)
                    <option value="{{$municipio->codigo_mun}}">{{$municipio->nombre}}</option>
                @endforeach
            @endif
        </select>
    </div>
    <div class="input-container ic2">
        <select name="codigo_parroquia" class="input" wire:model="codigo_par" placeholder=" ">
            @if ($parroquias->count() == 0)
                <option>Seleccione un municipio</option>
            @else
                <option disabled>Seleccione la parroquia</option>
                @foreach($parroquias as $parroquia)
                    <option value="{{$parroquia->codigo_par}}">{{$parroquia->nombre}}</option>
                @endforeach
            @endif
        </select>
    </div>
</div>
