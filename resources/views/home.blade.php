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
                     <br>
                     You have been giving rating to <strong>{{Auth::user()->ratings->count()}}</strong> diffrent movies.<br>
                     movies you've rated:<br>
                     <ul>
                       @foreach(Auth::user()->ratings as $rating)
                       <li>{{$rating->movie->title}}(rating{{$rating->rating}})</li>
                       @endforeach
                     </ul>
                     <br>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
