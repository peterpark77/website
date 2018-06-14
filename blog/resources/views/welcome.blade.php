<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Peter Park's Website</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #ffffff;
                color: black;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }
            a {
                font-size: 2em;
                text-decoration: none;
                display: inline-block;
                position: relative;
                font-family: 'Dosis', sans-serif;
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
            .quote {
                font-style: italic;
                padding-top: 0;
                padding-right: 25px;
                padding-left: 25px;
                padding-bottom: 5%;
            }

            .links > a {
                color: #000000;
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
            .img-circle{
                box-shadow: 10px 10px 5px #aaaaaa;
                border-radius: 50%;
            }
            a.link:after {
                content: '';
                position: absolute;
                left: 0;
                display: inline-block;
                height: 1em;
                width: 100%;
                border-bottom: 1px solid;
                margin-top: 10px;
                opacity: 0;
                -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
                transition: opacity 0.35s, transform 0.35s;
                -webkit-transform: scale(0,1);
                transform: scale(0,1);
            }

            a.link:hover:after {
                opacity: 1;
                -webkit-transform: scale(1);
                transform: scale(1);
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
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">


                <div class="quote">
                    "Are you even a CS major
                    if you don't have a personal website"
                </div>

                <div class="quote">
                    -some recruiter-
                </div>

                <div class="container">
                    <img src="Tiger.jpg" class="img-circle" alt="Tiger" width="200" height="200">
                </div>
                <a href="." class="title m-b-md">
                    Peter Park
                </a>
                <div class="links">
                    <a href="./about" class="link">About me</a>
                    <a href="./cv" class="link">CV</a>
                    <a href="https://github.com/peterpark77" class="link">GitHub</a>
                    <a href="./projects" class="link">Projects</a>
                    <a href="https://www.hackerrank.com/peterpark1995" class="link">Hackerrank</a>
                </div>
            </div>
        </div>
    </body>
</html>
