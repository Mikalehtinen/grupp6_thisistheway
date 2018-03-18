@extends('layouts/app')

@section('content')
<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>IMDB</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
 <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="{{$movie->posterpicture}}" alt="Card image cap">
  <div class="card-body">
    <p class="card-text">{{$movie->title}}</p>
    <p class="card-text">Rating: @foreach($movie->ratings as $rating){{$rating->rating}}/5 @endforeach<small class="text-muted"></p>
    <p class="card-text">{{$movie->desctiption}}</p>
    <p class="card-text">Director: <a href="{{route('directors.show', ['director' => $movie->director->id])}}"> {{$movie->director->name}}</a></p>
    <p class="card-text">Actors playing in this movie: <br>@foreach($movie->actors as $actor)
    <li><a href="{{route('actors.show', ['actor' => $actor->id])}}">{{$actor->name}}<br> </li></a>@endforeach</p>
  </div>
  </div>

  <form action="/action_page.php">
 @auth
  <div class="form-group">
    <label for="email">Rating</label>
    <input type="email" class="form-control" id="email">
  </div>
  <button type="submit" class="btn btn-default">Submit rating</button>
  @else
  <strong>login to rate</strong>
  @endif
</form>
<p> <a href="{{route('movies.edit', ['movie' => $movie->id])}}">ändra film </a></p>
</body>

</html>
<a href="{{route('movies.index')}}">Tillbaka</a>
@endsection
