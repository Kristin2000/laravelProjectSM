<!-- View for editing a comment -->

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
    <form action="{{ url('comments') }}" method="post">
    @csrf
        <div class="row">
            <div class="col-6 offset-3">
                        
                <div class="form-group">
                    <label for="txtar"><strong>Kommentar</strong></label>
                    <textarea class="form-control" rows="6" id="txtar" maxlength="300" name="text" style="resize:none">{{$comment->text}}</textarea>
                </div>

                <button type="submit" class="btn btn-secondary btn-lg">Post {{$postID}}</button>
            </div>        
        </div>  
    </form>  
</div>
@endsection