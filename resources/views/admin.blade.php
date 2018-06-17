@extends('layouts.app')

@section('content')
<div class="container">

  <div class="card">
    <div class="card-header bg-dark text-light">
      <h5 class="card-title">Admin Dashboard</h5>
    </div>
    <div class="card-body">
      <div class="row">
        <div class="col-md-8">
          <table class="table table-striped">
            <tbody>
              <a href="{{route('actors.create')}}" class="btn btn-success" role="Button">Add Actor</a><br><br>
              <a href="{{route('movies.create')}}" class="btn btn-success" role="Button">add Movie</a><br><br>
              <a href="{{route('directors.create')}}" class="btn btn-success" role="Button">add director</a>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
    <a href="{{route('movies.index')}}" class="btn btn-danger" role="Button">Back</a>
</div>

@endsection
