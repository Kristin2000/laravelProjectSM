@extends("posts.header")

@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Daily Thoughts</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

        <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;600;700&display=swap" rel="stylesheet">

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

    @if ($message = Session::get('success'))

    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>

    @endif

    <div class=row>
        <div class="col offset-10">
            <a class="btn btn-info rounded-circle py-2 mb-4" href="{{ route('posts.create') }}"><svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-plus-circle-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
            </svg></a>
        </div>
    </div>

    <table class="table table-bordered">

    <tr>
        <th>Titel</th>
        <th>Text</th>
    </tr>

    @foreach ($posts as $post)

    <tr>
        <td>{{ $post->title }}</td>
        <td>{{ $post->text }}</td>
    </tr>

    @endforeach
    </table>
    {!! $posts->links() !!}
    </body>
</html>
@endsection
