@extends("posts.header")

@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Daily Thoughts</title>

        <!-- Styles -->
        <style>
            body {
                font-family: 'Raleway';
            }
            h1 {
                text-align: center;
                color: #708FB3;
            }
        </style>
    </head>

    <body class="antialiased">
            <h1>Willkommen</h1>
    </body>
</html>
