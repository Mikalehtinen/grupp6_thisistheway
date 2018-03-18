@extends('layouts.app')

@section('content')
<div class="card-deck">
@foreach($actors as $actor)
<div class="container">
  {{$actor->name}} <br> {{$actor->description}}<br><br>
  <a href="{{route('actors.edit', ['actor' => $actor->id])}}">redigera skådespelare</a>
</div>
@endforeach
</div>
@endsection
