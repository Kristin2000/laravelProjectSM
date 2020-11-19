<!-- View for editing a post -->

@extends("posts.header") 

@section ("content")
<!-- Styles -->
    <style>
        body {
            overflow: hidden;
        }
        .shadow-textarea textarea.form-control {
            padding-left: 0.8rem;
        }

    </style>

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

                        <button type="submit" class="btn btn-secondary btn-lg">Update</button>
                    </div>        
                </div>  
            </form>  
</div>
@endsection