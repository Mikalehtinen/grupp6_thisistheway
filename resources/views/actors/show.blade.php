@extends('layouts.app')

@section('content')
<div class="container">
  <div class="card">
    <div class="card-header bg-dark text-light">
      <h5 class="card-title">{{$actor->name}}</a></h5>
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
          <a href="{{route('actors.edit', ['actor' => $actor->id])}}" class ="btn btn-success" role="Button">Redigera</a>
          <a href="{{route('actors.index')}}" class="btn btn-danger" role="Button">Tillbaka</a><br><br>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
