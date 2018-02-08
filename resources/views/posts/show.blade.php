@extends('layouts.main')

@section('content')
    <div class="col-sm-8 blog-main">
        <h1>{{$post->title}}</h1>
        @if(count($post->tags))
            <span>Tags:</span>
            @foreach($post->tags as $tag)
                <a href="{{route('post_tags', $tag->name)}}"><span><em>{{$tag->name}}</em></span></a>
            @endforeach
        @endif
        <hr>
        <p>
            {{$post->body}}
        </p>
        <hr>
        <div class="card">
            <div class="card-block">
                <br>
                @include('layouts.errors')
                <h4>Write Comment</h4>

                <form action="/posts/{{$post->id}}/comments" method="POST">
                    {{csrf_field()}}
                    <div id="comment-message" class="form-row">
                        <textarea rows="3" class="form-control" name="body" minlength="2" placeholder="Message"
                                  id="comment" required></textarea>
                        <br>
                        <button type="submit" class="btn-primary">Post Comment</button>
                    </div>
                    <br>
                </form>
            </div>
        </div>

        <br>
        <ul>
            @foreach($post->comments as $comment)
                <li>{{$comment->body}} by {{$comment->user->name}}</li>
            @endforeach
        </ul>
    </div>
@endsection