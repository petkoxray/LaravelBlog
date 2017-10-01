@extends('layouts.main')

@section('content')
    <div class="col-sm-8 blog-main">
        <form class="form-horizontal" action="/posts" method="post">
            {{csrf_field()}}
            <fieldset>
                <h3>Publish a post</h3>
                <hr>

                @include('layouts.errors')

                <div class="form-group">
                    <label class="col-sm-6 control-label">Post Title</label>
                    <div class="col-sm-8 ">
                        <input type="text" class="form-control" name="title" id="postTitle" placeholder="Post Title"
                               required>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-4 control-label">Content</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" rows="8" name="body" id="postBody" placeholder="Post content"
                                  required></textarea>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-4 col-sm-offset-4">
                        <button type="submit" class="btn btn-primary">Publish</button>

                    </div>
                </div>
            </fieldset>
        </form>
    </div>
@endsection()