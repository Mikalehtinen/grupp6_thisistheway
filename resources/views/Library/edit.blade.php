@extends('layouts.app')
@section('content')

<div class="container">
    Ändra format för Film: {{$Library->movie->title}}
<form method="POST" action="{{ route('Library.update', ['Library' => $Library->id])}}">
    @csrf
    <div class="form-group">
        <label for="format">format</label>
        <select class="form-control" name="format" id="format">
            <option value="Blu-ray">Blu-ray</option>
            <option value="DVD">DVD</option>
            <option value="VHS">VHS</option>
            <option value="Minidisk">Minidisk</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">spara</button>
    <a href="{{route('home')}}" class="btn btn-danger" role="Button">Back</a>
</form>
</div>
@endsection