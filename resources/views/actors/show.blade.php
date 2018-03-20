@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                  Information about {{$actor->name}}
                   </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <strong> Description </strong> <br><br>
                    <strong>Description:</strong>
                    {{$actor->description}}
                    <br><br>
                    {{$actor->name}} har spelat i filmerna:
                    <ul>
                      @foreach($actor->movies as $movie)
                      <li><a href="{{route('movies.show', ['movie'=>$movie->id])}}">{{$movie->title}}</li>
                      @endforeach
                    </ul>
                    <a href="{{route('movies.index')}}" class="btn btn-success" role="Button">tillbaka till filmer</a><br><br>
                    <a href="{{route('actors.edit', ['actor' => $actor->id])}}"class="btn btn-success" role="Button">ändra information om skådespelaren </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
