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
									<td>@if ($movie->releasedate < Carbon\Carbon::now())
       							 {{$movie->releasedate}}
        							@else
        								Under production, releasedate {{$movie->releasedate}}
        							@endif
        								<br></td>
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
						<a href="{{route('Library.create', ['movie'=>$movie->id])}}" class ="btn btn-success" role="Button">Add to library</a>@endauth
						@auth('admin')

						<a href="{{route('movies.edit', ['movie' => $movie->id])}}" class="btn btn-info" role="Button">Edit Movie</a>
						
						@endauth
						<a href="{{route('movies.index')}}" class ="btn btn-danger" role="Button">Tillbaka</a>
					{{-- <a class="btn btn-sm brn primary float-right" href="{{ route('Library.create', ['movie'=>$movie->id]) }}">Lägg till i bibliotek</a> --}}
					
					
					</div>
				</div>
				@auth

       <p> betygsätt film: {{$movie->title}}</p>
       <form method="POST" action="{{route('ratings.store')}}">
       @csrf
       <input type="hidden" name="_method" value="POST"/>

			 <div class="form-group">
		 <input type="hidden" name="user_id" value="{{Auth::user()->id}}" class="form-control"/>
		 </div>

			 <div class="form-group">
		 <input type="hidden" name="movie_id" value="{{$movie->id}}" class="form-control"/>
		 </div>

		    <div class="form-group">
        <select class="form-control" name="rating">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
						<option value="4">4</option>
						<option value="4">5</option>
        </select>
    </div>

          <input type="submit" class="btn brn-success" value="betygsätt"/>
           </div>
             </form>
        @else
          <strong>You have to be logged in in order to rate the movie</strong>
        @endif
	</div>
@endsection
