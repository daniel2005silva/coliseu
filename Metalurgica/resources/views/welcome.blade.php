<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                color: black;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
            body {
                background: url("{{ asset('imagens/metalurgica.jpg') }}") no-repeat;
                background-size: cover;
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
                background-color: black;
                color: white;
                font-family: 'Nunito', sans-serif;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
                border-radius: 5px;
            }
            .links > a:hover {
                color: red;
                font-size: 13px;
                background-color: white;
                border-radius: 5px;
            }
            .title {
                background-color: white;
                color: black;
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
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                   <b> Metalúrgica</b>
                    <!--<img src="{{ asset('imagens/metalurgica.jpg') }}">-->
                </div>

                <div class="links">
                    <a href="funcionario/">Recursos Humanos - RH</a>
                    <a href="#">Manutenção</a>
                    <a href="#">Suprimentos</a>
                    <a href="#">Vendas</a>
                    <a href="#">Chão de Fábrica</a>
                </div>
            </div>
        </div>
    </body>
</html>
