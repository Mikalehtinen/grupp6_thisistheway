<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>IMDB</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{route('actors.index')}}">Skådespelare</a>
                        <a href="{{route('directors.index')}}">Regisörer</a>
                        <a href="{{ route('movies.index')}}">Filmer</a>
                        <a href="{{ route('genres.index')}}">Genres</a>
                        <a href="{{ url('/home') }}">Dashboard</a>
                    @else
                        <a href="{{route('actors.index')}}">Skådespelare</a>
                        <a href="{{route('directors.index')}}">Regisörer</a>
                        <a href="{{ route('movies.index')}}">Filmer</a>
                        <a href="{{ route('genres.index')}}">Genres</a>
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                  <img class="card-img-top" src="https://fortunedotcom.files.wordpress.com/2014/09/451256444.jpg" alt="Card image cap" width="30%" height="30%">
                  <br>
                    привет

                </div>
                </div>
            </div>
        </div>
    </body>
</html>
