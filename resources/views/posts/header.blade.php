<!DOCTYPE html>
<html>
    <head>
        <title>Daily Thoughts</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            #header {
                background-color: #eeeeee; 
            }      
        </style>
    </head>
    <body>
        <div class="container">
            <div class = "row mb-4 py-2 pl-4" id="header">
                @if (Request::url() === "http://laravelprojectsm.local/posts" || Request::url() === "http://laravelprojectsm.local/index") 
                    <h3><strong>Daily Thoughts</strong></h3>
                @else
                    <a class="btn btn-outline-secondary" href="{{ route('posts.index') }}">Zu den Posts</a>
                @endif                    
            </div>   
            @yield('content')    
        </div>
    </body>
</html>