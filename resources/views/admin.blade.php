@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">

                  <h1>admin dashboard</h1>
                  <p>här är fortf ett fel med admin. </p>
                  <p>"Auth::admin()->name" retunerar ett felmeddelande </p>
                  Method Illuminate\Auth\SessionGuard::admin does not exist.
                  keffa länkar för admin dashboard:<br>

                  <a href="{{route('directors.create')}}" class="btn btn-success" role="Button">Lägg till regissör</a><br><br>
                  <a href="{{route('actors.create')}}" class="btn btn-success" role="Button">Lägg till skådespelare</a><br>
            </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
