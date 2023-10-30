@extends ('layout.app')
@section ('content')

<div class="container">

    
    <h1>{{$message}}</h1>
    
    @foreach($trains as $key => $train)
    <div>{{$train['company']}}</div>
    @endforeach
    
</div>
@endsection