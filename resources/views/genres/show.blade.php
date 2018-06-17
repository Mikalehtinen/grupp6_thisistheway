@extends('layouts.app')

@section('content')

<div class="container">
  <div class="card">
    <div class="card-header bg-dark text-light">
      <h5 class="card-title">{{$genre->name}}</h5>
      @auth('admin')
      <a href="{{route('genres.edit', ['genre' => $genre->id])}}" class="btn btn-success" style="float:right">Edit Genre</a>
      @endauth
    </div>
    <div class="card-body">
      <div class="row">
        <div class="col-md-8">
          <table class="table table-striped">
            <tbody>
              <tr>
                <th>Filmer under denna genre:</th>
                <td>@foreach($genre->movies as $movie)<a href="{{route('movies.show', ['movie' => $movie->id])}}">{{$movie->title}}</a>, @endforeach</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
      <a href="{{route('genres.index')}}" class="btn btn-danger" role="Button">Tillbaka</a>
  </div>

</div>
@endsection
