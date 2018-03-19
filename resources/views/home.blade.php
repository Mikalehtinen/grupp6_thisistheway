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
                     this is the user dashboard for {{Auth::user()->name}}
                       <a href="{{route('directors.create')}}">Lägg till regissör</a><br>
                       <a href="{{route('actors.create')}}">Lägg till skådespelare</a><br>

                     <br>
                     movies you've rated:
                     <br>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
