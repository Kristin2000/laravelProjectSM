<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Daily Thoughts</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            body {
                font-family: 'Raleway';
            }
            h1 {
                color: #708FB3;
            }
            .centered_box {
                text-align: center;
                height: 650px;
                width: 400px;
                margin-top: -325px; /* Damit der Ausrichtungspunkt in der Mitte der Box liegt */
                margin-left: -200px;
                position: absolute;
                top: 50%;
                left: 50%;

                background-color: #EAEFF5;
                border: 2px solid black;
                border-radius: 4%;
            }
        </style>
    </head>

    <body class="container">
        <div class="centered_box">
            <div class="row mb-5">
                <div class="col-12">
                    <h1 class="mt-4">Willkommen bei "Daily Thoughts"</h1>
                </div>
            </div>
            <div class="row mx-4 ">
                <div class="col-12">
                    <a class="btn btn-secondary my-3 btn-block btn-lg" role="button" href="{{ route('login') }}">Login</a>
                </div>
            </div>
            <div class="row mx-4 ">
                <div class="col-12">
                    <a class="btn btn-secondary my-3 btn-block btn-lg" role="button" href="{{ route('register') }}">Registrierung</a>
                </div>                
            </div>
            <div class="row mx-4 ">
                <div class="col-12">
                    <a class="btn btn-secondary my-3 btn-block btn-lg" role="button" href="./index">Als Gast fortfahren</a>
                </div> 
            </div>
                    <!-- <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                    </div> -->
            </div>
        </div>
    </body>
</html>
