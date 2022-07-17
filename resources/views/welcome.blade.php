<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Chirel.cuisine</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        html,
        body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
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

        .links>a {
            color: #636b6f;
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
            <a href="{{ url('/home') }}">accueil</a>
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
                Chirle.cuisine
            </div>

            <div class="links">
                <a href="http://chirel.cuisine.test/presentation">Présentation</a>
                <a href="http://chirel.cuisine.test/recettes">Recettes</a>
                <a href="http://chirel.cuisine.test/nouveautes">Nouveautés</a>

                @extends('layouts.app')

                @section('content')
                <div class="presentation" style="text-align:center">
                    <p> Bonjour, je m'appelle Chirel et j'adore la patisserie. <br> Quand j'ai du temps libre, je cuisine, que ce soit recettes salées ou sucrées, mais je préfère le sucré. <br> C'est pourquoi j'ai eu l'idée de créer ce blog de recettes, il y'en aura de toutes les sortes. <br> Bonne visite. <br> N'hésitez pas à laisser des commentaires et me dire quelles recettes vous avez testé.</p>
                </div>

</body>

</html>
</div>
@endsection