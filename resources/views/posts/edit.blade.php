<!-- View for editing a post -->

@extends("posts.header") 

@section ("content")
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Edit Post</title>
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

            <form action="{{ route ('posts.update', $post->id) }}" method="post">
            @csrf
            @method('PUT')
                <div class="row">
                    <div class="col-6 offset-3">
                        <div class="form-group">
                            <label for="ttl"><strong>Titel</strong></label>
                            <input type="text" class="form-control" id="ttl" maxlength="30" value="{{$post->title}}" name="title">
                        </div>
                        
                        <div class="form-group">
                            <label for="txtar"><strong>Text</strong></label>
                            <textarea class="form-control" rows="5" id="txtar" maxlength="260" name="text" style="resize:none">{{$post->text}}</textarea>
                        </div>

                        <button type="submit" class="btn btn-secondary btn-lg">Edit</button>
                    </div>        
                </div>  
            </form>  
        </div>
    </body>
</html>
@endsection