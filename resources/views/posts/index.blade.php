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

        <div class="row justify-content-center">
            <h1>Willkommen</h1>
        </div>

            @if ($message = Session::get('success'))

            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>

            @endif

            <!-- Icon from https://icons.getbootstrap.com/ -->
            <div class=row>
                <div class="col offset-10">
                    <a class="btn btn-info rounded-circle py-2 mb-4" href="{{ route('posts.create') }}"><svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-plus-circle-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
                    </svg></a>
                </div>
            </div>

            @foreach ($posts as $post)

            <div class="row">                
                <table class="table table-bordered">
                    <tr>
                        <th width="150px">Titel</th>
                        <th width="400px">Text</th>
                    </tr>    

                    <tr>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->text }}</td>
                        <td><a class="btn btn-info" href="{{ route('posts.edit', $post['id']) }}">Edit</a></td>
                        <td>
                            <form action="{{ route ('posts.destroy', $post->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                </table>
            </div>

            @endforeach

            {{ $posts->links() }}
@endsection
