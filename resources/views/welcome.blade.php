<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <style>
            html, body {
                font-weight: 200;
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
                padding: 0 25px;
                font-size: 13px;
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
                        <a href="{{ url('/home') }}">Dashboard</a>
                        <a href="{{ url('/onas') }}">O Nas</a>
                        <a href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Wyloguj') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    @else
                        <a href="{{ route('login') }}">Zaloguj</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Zarejestruj</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
              <img src="/storage/images/wsb.png" alt="">
                <div class="title m-b-md">
                    Galeria WSB
                </div>
                @if (Route::has('login'))
                    <div>
                      @auth
                        Jesteś zalogowany. // To takie proste ! :)

                        @else
                            <a href="{{ route('login') }}" class="btn btn-primary">Zaloguj się</a>
                          @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn btn-danger">Zarejestruj się</a>
                          @endif
                      @endauth
                    </div>
                @endif
            </div>

        </div>
    </body>
</html>
