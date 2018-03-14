@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Admin dashboard for @foreach ($admins as $admin) <strong>{{$admin->email}}</strong> @endforeach

            </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in as @foreach ($admins as $admin) {{$admin->name}} @endforeach

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
