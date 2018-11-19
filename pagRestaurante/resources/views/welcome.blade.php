<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Anuncios - Examen Final</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

            <link rel="stylesheet" href="{{asset('css/normalize.css')}}">
            <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
            <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
            <link rel="stylesheet" href="{{asset('css/themify-icons.css')}}">
            <link rel="stylesheet" href="{{asset('css/flag-icon.min.css')}}">
            <link rel="stylesheet" href="{{asset('css/cs-skin-elastic.css')}}">
            <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
            <link rel="stylesheet" href="{{asset('scss/style.css')}}">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: white;
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
                color: white;
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
    <body  class="bg-dark" >
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">INICIAR SESION</a>
                        <a href="{{ route('register') }}">REGISTRARSE</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    SISTEMA DE PUBLICACION DE ANUNCIOS DE RESTAURANTE
                </div>

                <div class="links">
                    <a href="#">UNIVERSIDAD MARIANO GALVEZ DE GUATEMALA</a>
                    <a href="#">DESARROLLO WEB 8VO. SEMESTRE</a>
                    <a href="#">ING. IVAN DE LEON</a>
                    <a href="#">DESARROLLADOR POR: RICARDO DANIEL VELASQUEZ QUIROA 0903-15-2793</a>
                </div>
            </div>
        </div>
    </body>
</html>
