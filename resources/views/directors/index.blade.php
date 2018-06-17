@extends('layouts.app')

@section('content')
<div class="container">
  @auth('admin')
<a href="{{route('directors.create')}}" class="btn btn-primary" role="Button">Add director </a>
@endauth
</div>
  @foreach($directors as $director)
  <div class="container">
    <div class="card">
      <div class="card-header bg-dark text-light">
        <h5 class="card-title"><a href="{{route('directors.show', ['director' => $director->id])}}">{{$director->name}}</a></h5>
      </div>
      <div class="card-body">
        <div class="row">
          <div class="col-md-8">
            <table class="table table-striped">
              <tbody>
                <tr>
                  <th>Description</th>
                  <td>{{$director->description}}</td>
                </tr>
                <tr>
                  <th>Movies directed</th>
                  <td>@foreach($director->movies as $movie)<a href="{{route('movies.show', ['movie' => $movie->id])}}">{{$movie->title}} ,@endforeach</td>
                </tr>
              </tbody>
            </table>
            @auth('admin')
            <a href="{{route('directors.edit', ['director' => $director->id])}}" class ="btn btn-success" role="Button">Redigera</a>
            @endauth
          </div>
        </div>
      </div>
    </div>
  </div>
    @endforeach
@endsection
