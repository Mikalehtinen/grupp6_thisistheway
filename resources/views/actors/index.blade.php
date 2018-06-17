@extends('layouts.app')

@section('content')

<div class="card-deck">
  <div class="container">
    @auth('admin')
  <a href="{{route('actors.create')}}" class="btn btn-primary" role="Button">Add Actor </a>
  @endauth
  </div>
@foreach($actors as $actor)
<div class="container">
  <div class="card">
    <div class="card-header bg-dark text-light">
      <h5 class="card-title"><a href="{{route('actors.show', ['actor' => $actor->id])}}">{{$actor->name}}</a></h5>
    </div>
    <div class="card-body">
      <div class="row">
        <div class="col-md-8">
          <table class="table table-striped">
            <tbody>
              <tr>
                <th>Description</th>
                <td>{{$actor->description}}</td>
              </tr>
              <tr>
                <th>Movies starred in</th>
                <td>@foreach($actor->movies as $movie)<a href="{{route('movies.show', ['movie' => $movie->id])}}">{{$movie->title}} ,@endforeach</td>
              </tr>
            </tbody>
          </table>
          @auth('admin')
          <a href="{{route('actors.edit', ['actor' => $actor->id])}}" class ="btn btn-success" role="Button">Redigera</a>
          @endauth
        </div>
      </div>
    </div>
  </div>
</div>
@endforeach
</div>
@endsection
