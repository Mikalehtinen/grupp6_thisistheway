@extends('layouts.app')
@section('content')
	<div class="container">
@foreach($movies as $movie)
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
									<td>@if ($movie->releasedate < Carbon\Carbon::now())
        							{{$movie->releasedate}}
        								@else
        									Under production, releasedate {{$movie->releasedate}}
       						 @endif
        						<br></td>
								</tr>
								<tr>
                  @foreach($movie->genres as $genre)
									<th>Genre</th>
									<td>{{$genre->name}}</td>
								</tr>
                @endforeach
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
              <a href="{{route('movies.show', ['movie' => $movie->id])}}" class="btn btn-info" role="Button">View Movie</a>
					</div>
				</div>
      </div>
      </div>
      @endforeach
      @endsection
      </div>
