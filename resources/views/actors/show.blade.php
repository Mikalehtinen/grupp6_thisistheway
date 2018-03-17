@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                  Information about {{$actor->name}}
                   </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <strong> Description </strong> <br><br>

                    {{$actor->description}}
                    <br>
                    <a href="{{route('movies.index')}}">tillbaka till filmer</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
