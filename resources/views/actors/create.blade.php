@extends('layouts/app')

@section('content')

<h1>lägg till skådespelare</h1>

<!-- postformulär -->

<form method="POST" action="{{route('actors.store')}}">
@csrf
<input type="hidden" name="_method" value="POST"/>
  <div class="form-group">
  <input type="text" name="name" class="form-control" placeholder="Namn"/>
    </div>
    <div class="form-group">
    <input type="text" name="description"  class="form-control" placeholder="desc"/>

    <input type="submit" class="btn brn-primary" value="lägg till skådespelare"/>
      </div>
      </form>

<p>du måste vara inloggad som administratör för att lägga till filmer. </p>


@endsection
