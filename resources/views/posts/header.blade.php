<!DOCTYPE html>
<html>
    <head>
        <title>Daily Thoughts</title>
        <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet"> -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    
        <!-- Styles -->
        <style>
            #header {
                background-color: #eeeeee; 
            }       
        </style>
    </head>
    <body>
        <div class="container">
            <div class = "row mb-3 py-2"  id="header">
                <div class="col">
                @if (Request::url() === "http://laravelprojectsm.local/posts" || Request::url() === "http://laravelprojectsm.local/index") 
                    <h3>Daily Thoughts</h3>
                @else
                    <a class="btn btn-outline-secondary" href="{{ route('posts.index') }}">Zu den Posts</a>
                @endif                    
                </div>
            </div>         
            @yield('content')
        </div>
    </body>
</html>