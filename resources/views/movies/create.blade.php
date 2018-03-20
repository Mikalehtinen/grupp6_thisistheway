@extends('layouts/app')

@section('content')

<h1>lägg till film</h1>

<!-- postformulär -->

<form method="POST" action="{{route('movies.store')}}">
@csrf
  <div class="form-group">
  <input type="text" name="title"  class="form-control" placeholder="Titel"/>
    </div>
      <div class="form-group">
    <input type="text" name="desctiption" class="form-control" placeholder="Description"/>
      </div>
        <div class="form-group">
      <input type="text" name="runtime" class="form-control" placeholder="runtime"/>
        </div>
          <div class="form-group">
      <input type="text" name="releasedate" class="form-control" placeholder="Releasedate"/>
        </div>
          <div class="form-group">
        <input type="text" name="posterpicture" class="form-control" placeholder="Posterpicture"/>
          </div>
            <div class="form-group">
          <input type="text" name="director_id" class="form-control" placeholder="director ID"/>

          <input type="submit" class="btn brn-primary" value="Lägg till film"/>
        </div>
      </form>



@endsection
