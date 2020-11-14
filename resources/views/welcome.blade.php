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

    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
        
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endif
                </div>
            @endif

            <!-- Shortcut to comment: ctrl + K + C; uncomment: ctrl + K + U -->

            <div class="centered_box">
                <h1 class="mt-4">Willkommen bei <br></br> Daily Thoughts</h1>
                </br>
                <a class="btn btn-secondary" width="300px" role="button" href="./index">Index</a>
                    <!-- wird später Login
                        <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                    </div> -->
            </div>
        </div>
    </body>
</html>
