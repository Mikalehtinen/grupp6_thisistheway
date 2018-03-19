@extends('layouts.app')
@section('content')
	<div class="container">

		<div class="card">
			<div class="card-header bg-dark text-light">
				<h5 class="card-title">{{$movie->title}}</h5>
			</div>
			<div class="card-body">
				<div class="row">
					<div class="col-md-4">
						<img class="card-img-top" src="{{$movie->posterpicture}}" alt="Card image cap">
					</div>
					<div class="col-md-8">
						<table class="table table-striped">
							<tbody>
								<tr>
									<th>Release date</th>
									<td>{{$movie->releasedate}}</td>
								</tr>
								<tr>
									<th>Genre</th>
									<td>@foreach($movie->genres as $genre)<strong>{{$genre->name}}</strong>, @endforeach</td>
								</tr>
                  <tr>
  									<th>Rating</th>
  									<td>{{$movie->ratings}} /5</td>
  								</tr>
                  <tr>
  									<th>Total ratings</th>
  									<td>{{$movie->count}}</td>
  								</tr>
								<tr>
									<th>Runtime</th>
									<td>{{$movie->runtime}}</td>
								</tr>
                <tr>
                  <th>Description</th>
                  <td>{{$movie->desctiption}}</td>
                </tr>
                <tr>
                  <th>Director</th>
                  <td><a href="{{route('directors.show', ['director' => $movie->director->id])}}"> {{$movie->director->name}} </a></td>
                </tr>
                <tr>
                  <th>Actors</th>
                  <td>@foreach($movie->actors as $actor)<a href="{{route('actors.show', ['actor'=>$actor->id])}}">{{$actor->name}}<br> </a>@endforeach</td>
                </tr>
							</tbody>
						</table>
            @auth
            <a href="#" class ="btn btn-success" role="Button">Add to library</a>
            <a href="{{route('movies.edit', ['movie' => $movie->id])}}" class="btn btn-info" role="Button">Edit Movie</a>
            <a href="{{route('movies.index')}}" class ="btn btn-danger" role="Button">Tillbaka</a>
            @else
            <a href="{{route('movies.index')}}" class ="btn btn-danger" role="Button">Tillbaka</a>
            @endif

					</div>
				</div>

        <form action="/action_page.php">
       @auth
       <p> betygsätt film: {{$movie->title}}</p>
       <form method="POST" action="{{route('ratings.store')}}">
       @csrf
       <input type="hidden" name="_method" value="POST"/>
         <div class="form-group">
         <input type="text" name="rating" class="form-control" placeholder="Rating 1-5"/>
         <br>
          <input type="submit" class="btn brn-success" value="betygsätt"/>
           </div>
             </form>
        @else
          <strong>You have to be logged in in order to rate the movie</strong>
        @endif
		</div>

	</div>
@endsection
