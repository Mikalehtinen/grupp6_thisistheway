@extends('layouts.app')
@section('content')

<div class="container">
<h1>Lägg till Filmen {{$movie->title}} i ditt bibliotek</h1>
<form method="POST" action="{{ route('Library.store', ['movie' => $movie->id])}}">
    @csrf

    <div class="form-group">
        <label for="format">Format</label>
        <select class="form-control" name="format" id="format">
            <option value="Blu-ray">Blu-ray</option>
            <option value="DVD">DVD</option>
            <option value="VHS">VHS</option>
            <option value="Minidisk">Minidisk</option>
        </select>
    </div>


<button type="submit" class="btn btn-primary"> Lägg Till </button>

</form>
</div>

@endsection