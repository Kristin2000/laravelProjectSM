<!-- View for creating a new comment -->

@extends("posts.header") 

@section ("content")
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
                overflow: hidden;
            }
            .shadow-textarea textarea.form-control {
                padding-left: 0.8rem;
            }

        </style>
    </head>

    <body>
        <div class="container">

            <form action="{{ url('comments') }}" method="post">
            @csrf
                <div class="row">
                    <div class="col-6 offset-3">
                        
                        <div class="form-group">
                            <label for="txtar"><strong>Kommentar</strong></label>
                            <textarea class="form-control" rows="6" id="txtar" maxlength="300" placeholder="Was möchtest du anmerken?" name="text" style="resize:none"></textarea>
                        </div>

                        <button type="submit" class="btn btn-secondary btn-lg">Post {{$postID}}</button>
                    </div>        
                </div>  
            </form>  
        </div>
    </body>
</html>
@endsection
