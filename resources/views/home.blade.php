@extends('layouts.app')
@section('content')
<div class="container">

  <div class="card">
    <div class="card-header bg-dark text-light">
      <h5 class="card-title">User dashboard for {{Auth::user()->name}}</h5>
      <a href="#" class="btn btn-danger" role="Button" style="float:right">Settings</a>
    </div>
    <div class="card-body">
      <div class="row">
        <div class="col-md-8">
          <table class="table table-striped">
            <tbody>
                <tr>
                  <th>Movies you've rated</th>
                  <td><ul>
                    @foreach(Auth::user()->ratings as $rating)
                  <a href="{{route('movies.show', ['id' => $rating->movie->id] )}}"><li>{{$rating->movie->title}}</a> ({{$rating->rating}} /5)</li>
   
                    @endforeach
                  </td></ul>
                </tr>
                <th>Your library:</th>
                <tbody>
                  @foreach(Auth::user()->Library as $Library)
                  <td>
                    <a href="{{route('movies.show', ['id' => $Library->movie->id] )}}"><li>{{$Library->movie->title}}</a></li>
                  </td>
                    <td>
                      Format:{{$Library->format}} 
                    </td>
                    <td>
                      <a href="{{route('Library.edit', ['Library' => $Library->id])}}" class="btn btn-sm btn-primary float-right">Ändra</a>
                      
                    </td>
                  </tr>
                  @endforeach
                </tbody> 
                </td>
              </tr>

           <a href="{{route('movies.index')}}" class="btn btn-danger" role="Button">Back</a>
      
        </div>
      </div>
      
    </div>
    
  </div>

@endsection
