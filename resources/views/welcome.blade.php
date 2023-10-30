@extends ('layout.app')
@section ('content')

<div class="container">

    
    <h1>{{$message}}</h1>

    <div class="row">

        @foreach($trains as $key => $train)
        <div class="col p-2">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">{{$train['company']}}</h5>
                <h6 class="card-subtitle mb-2 text-muted ">Stazione di partenza: {{$train['departure_station']}}</h6>
                <p class="card-text">Partenza: {{$train['departure_time']}}</p>
                <p class="card-text">Stazione d'arrivo: {{$train['arrival_station']}}</p>
                <p class="card-text">Arrivo: {{$train['arrival_time']}}</p>
                <p class="card-text">Codice Treno: {{$train['train_code']}}</p>
                <p class="card-text">Carrozze: {{$train['carriages']}}</p>
                <p class="card-text">In ritardo: {{$train['delay'] ? 'yes' : 'no'}}</p>
                <p class="card-text">Cancellato: {{$train['canceled'] ? 'yes' : 'no'}}</p>
                
              </div>
            </div>
            
        </div>
        @endforeach
    </div>
    
</div>
@endsection