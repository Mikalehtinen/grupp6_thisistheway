@extends('layouts/app')
@section('content')

<h1>lägg till regissör</h1>

<!-- postformulär -->

<form method="POST" action="{{route('directors.store')}}">
@csrf
<input type="hidden" name="_method" value="POST"/>
  <div class="form-group">
  <input type="text" name="name" class="form-control" placeholder="Namn"/>
    </div>
    <div class="form-group">
    <input type="text" name="description"  class="form-control" placeholder="desc"/>

    <input type="submit" class="btn brn-primary" value="lägg till regissör"/>
  </div>
      </form>



@endsection
