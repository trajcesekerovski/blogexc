
@extends('main')

@section('title', '| Home posts')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="jumbotron">
                <h1 class="display-4">Here we have the posts, Enjoy.</h1>
                <hr class="my-4">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8">
            @if(count($posts) > 0)
                <ul class="list-group">
                @foreach($posts as $post)
                    <div class="post">
                        <li class="list-group-item posts">
                            <a href="/posts/{{$post->id}}" class="txtlink">{{$post->title}}</a>
                            <p>{!!$post->body!!}</p>
                            <small>Written on {{$post->created_at}}</small>
                        </li>
                    </div>
                @endforeach
                </ul>
                    {{ $posts->links() }}
            @else
                <p>No posts found.</p>
            @endif
        </div>
        <div class="col-md-3 col-md-offset-1">
            <h3>"Code is like humor. When you have to explain it, it’s bad."<small id="quote"> – Cory House</small></h3>
        </div>
    </div>
@endsection