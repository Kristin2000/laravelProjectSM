<!-- View for creating a new comment -->

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
    <form action="/comments" method="post">
    @csrf
        <div class="row">
            <div class="col-6 offset-3">
                
                <div class="form-group">
                    <label for="txtar"><strong>Kommentar</strong></label>
                    <textarea class="form-control" rows="6" id="txtar" maxlength="300" placeholder="Was möchtest du anmerken?" name="text" style="resize:none"></textarea>
                </div>

                <button type="submit" class="btn btn-secondary btn-lg" name="post" value="{{ $postID }}">Kommentieren</button>
            </div>        
        </div>  
    </form>  
</div>
@endsection
