@if($message= Session::get('succes'))
    <div class="succes_message">
        <p>{{$message}}</p>
    </div>
@endif

