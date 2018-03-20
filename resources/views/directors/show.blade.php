@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                  Information about {{$director->name}}
                   </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <strong> description: </strong> {{$director->description}}
                    <br><br>
                    {{$director->name}} har regiserat:
                    <ul>
                      @foreach($director->movies as $movie)
                      <li><a href="{{route('movies.show', ['movie' => $movie->id])}}">{{$movie->title}}</li>
                      @endforeach
                    </ul>
                    <a href="{{route('movies.index')}}">Tillbaka </a>
                    <br>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
