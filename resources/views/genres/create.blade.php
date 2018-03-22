@extends('layouts/app')

@section('content')

<h1>Skapa genre</h1>

<!-- postformulär -->

<form method="POST" action="{{route('genres.store')}}">
@csrf
  <div class="form-group">
  <input type="text" name="name"  class="form-control" placeholder="genre-name"/>
          <input type="submit" class="btn brn-primary" value="Lägg till film"/>
        </div>
      </form>
@endsection
