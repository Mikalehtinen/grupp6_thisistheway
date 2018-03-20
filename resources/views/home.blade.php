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
                <th>Movies you've rated </th>
                <td>{{Auth::user()->ratings->count()}}</td>
              </tr>
                <tr>
                  <th>Movies you've rated</th>
                  <td><ul>
                    @foreach(Auth::user()->ratings as $rating)<li>{{$rating->movie->title}} (rating {{$rating->rating}} /5)</li>
                    @endforeach
                  </ul></td>
                </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <a href="{{route('movies.index')}}" class="btn btn-danger" role="Button">Back</a>
  </div>

@endsection
