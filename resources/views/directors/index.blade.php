@extends('layouts.app')

@section('content')
<div class="card-deck">
@foreach($directors as $director)
<div class="container">
  {{$director->name}} <br> {{$director->description}}<br><br>
  <a href="{{route('directors.edit', ['director' => $director->id])}}">redigera regissör</a>
</div>
@endforeach
</div>
@endsection
