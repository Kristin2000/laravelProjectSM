@extends("posts.header")

@section('content')
    <!-- Styles -->
    <style>
        body {
            font-family: 'Raleway';
        }
        h1 {
            color: #708FB3;
        }
    </style>

        <!-- Personalisierte Begrüßung -->
        @if (null !== ( Auth::user() ))
        <div class="row justify-content-center">
            <h1>Willkommen  {{ Auth::user()->name }}!</h1>
        </div>
        <!-- Icon from https://icons.getbootstrap.com/ -->
        <div class=row>
            <div class="col offset-10">
                <a class="btn btn-info rounded-circle py-2 mb-4" href="{{ route('posts.create') }}"><svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-plus-circle-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
                </svg></a>
            </div>
        </div>
        @else
        <div class="row justify-content-center">
            <h1>Willkommen</h1>
        </div>
        @endif

        @if ($message = Session::get('success'))

        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>

        @endif

            

            @foreach ($posts as $post)

            <div class="row"> 

                <div class="clearfix">
                    <div class="pull-left"><strong>{{ $post->username }}</strong></div>
                    <div class="pull-right">{{ $post->created_at->format('H:i d.m.Y') }}</div>
                </div>               

                <table class="table table-bordered">
                    <tr>
                        <th width="160px">{{ $post->title }}</th>
                        <td width="400px">{{ $post->text }}</td>

                        @if ( null !== ( Auth::user() ))
                        <td width="300px">
                            <form action="{{ route ('posts.destroy', $post->id) }}" method="post">
                            
                            @if ( $post->userID == Auth::user()->id || Auth::user()->id === 1)                            
                                <a class="btn btn-info" href="{{ route('posts.edit', $post['id']) }}">Bearbeiten</a>  

                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">Löschen</button>
                            @endif
                            
                                <a class="btn btn-success" href="{{ route('comments.show', $post->id) }}">Kommentieren</a>                                                        
                            </form>
                        </td>
                        @endif
                    </tr>                  
                </table>
            </div>
            <div class="row">
                <div class="col">
                    <p class="offset-2"><strong>Kommentare</strong></p>
                <div>
            </div>

            @foreach ($comments as $comment)
                @if( $post->id === $comment['postID'])

                <div class="row mb-2 offset-2">
                    <table class="table">
                        <tr>
                            <td width="160px">{{ DB::table('users')
                                    ->join('comments', function($join) use($comment)
                                    {
                                        $join->on('users.id', '=', 'comments.userID')
                                            ->where('comments.id', '=', $comment['id']);
                                    })
                                    ->pluck('users.name')->first() }}
                            </td>
                            <td width="400px">{{ $comment['text'] }}</td>
                            <td width="300px">
                                @if ( null !== ( Auth::user() ))
                                    @if ( $comment['userID'] == Auth::user()->id || Auth::user()->id === 1)

                                    <form action="{{ route ('comments.destroy', $comment['id']) }}" method="post">                         

                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-outline-danger btn-sm" type="submit">Löschen</button>
                                                                                    
                                    </form>
                                    @endif
                                @endif
                                </br>
                            </td>
                        </tr>
                    </table>
                </div>

                @endif
            @endforeach

            @endforeach

            {{ $posts->links() }}
@endsection
