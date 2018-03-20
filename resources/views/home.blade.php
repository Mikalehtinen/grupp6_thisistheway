@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                  <p>user dashboard for user {{Auth::user()->email}}</p>
                   </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                     this is the user dashboard for {{Auth::user()->name}}<br>
                       <a href="{{route('directors.create')}}" class="btn btn-success" role="Button">Lägg till regissör</a><br><br>
                       <a href="{{route('actors.create')}}" class="btn btn-success" role="Button">Lägg till skådespelare</a><br>
                     <br>
                     You have been giving rating to <strong>{{Auth::user()->rating->count()}}</strong> diffrent movies.<br>
                     movies you've rated:<br>
                     {{Auth::user()->rating}}

                     <br>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
