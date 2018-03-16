@extends('layouts.app')

@section('content')
<div class="card-deck">
@foreach($movies as $movie)

<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="{{$movie->posterpicture}}" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">{{$movie->title}} </h5>
    <p class="card-text">{{$movie->desctiption}}</p>
    <p class="card-text"><small class="text-muted">Rating: 5/5</small></p>
    <a href="{{route('movies.show', ['movie' => $movie->id])}}" class="btn btn-primary">Se film</a>
  </div>
</div>
@endforeach
</div>
@endsection
