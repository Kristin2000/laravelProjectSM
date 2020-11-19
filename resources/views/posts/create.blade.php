<!-- View for creating a new post -->

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

            <form action="{{ url('posts') }}" method="post">
            @csrf
                <div class="row">
                    <div class="col-6 offset-3">
                        <div class="form-group">
                            <label for="ttl"><strong>Titel</strong></label>
                            <input type="text" class="form-control" id="ttl" maxlength="30" placeholder="Thema..." name="title">
                        </div>
                        
                        <div class="form-group">
                            <label for="txtar"><strong>Text</strong></label>
                            <textarea class="form-control" rows="5" id="txtar" maxlength="260" placeholder="Was möchtest du sagen?" name="text" style="resize:none"></textarea>
                        </div>

                        <button type="submit" class="btn btn-secondary btn-lg">Post</button>
                    </div>        
                </div>  
            </form>  
        </div>
@endsection
