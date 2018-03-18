@extends('layouts/app')

@section('content')

<h1>edit movie {{$movie->title}}</h1>

<!-- postformulär -->

<form method="POST" action="{{route('movies.update', ['movie' => $movie->id])}}">
@csrf
<input type="hidden" name="_method" value="PUT"/>
  <div class="form-group">
  <input type="text" name="title" value="{{$movie->title}}" class="form-control" placeholder="titel"/>
    </div>
      <div class="form-group">
        <input type="text" name="desctiption" value="{{$movie->desctiption}}" class="form-control" placeholder="desc"/>
      </div>
        <div class="form-group">
      <input type="text" name="runtime" value="{{$movie->runtime}}" class="form-control" placeholder="runtime"/>
        </div>
          <div class="form-group">
      <input type="text" name="releasedate" value="{{$movie->releasedate}}" class="form-control" placeholder="releasedate"/>
        </div>
          <div class="form-group">
        <input type="text" name="posterpicture" value="{{$movie->posterpicture}}" class="form-control" placeholder="posterpic"/>
          </div>
            <div class="form-group">
          <input type="text" name="director_id" value="{{$movie->director_id}}" class="form-control" placeholder="director id"/>

          <input type="submit" class="btn brn-primary" value="updatera"/>
        </div>
      </form>

<p>du måste vara inloggad som administratör för att lägga till filmer. </p>


@endsection
