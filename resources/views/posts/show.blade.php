
@extends('main')

@section('title', '| Home posts')

@section('content')
    <br>
    <a href="/posts" class="btn btn-secondary">Go Back to posts</a>
    <h1>{{$post->title}}</h1>
    <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
    <div>
        {!!$post->body!!}
    </div>
    <div class="row">
        <div class="col-sm-1 col-md-1">
            <a href="/posts/{{$post->id}}/edit" class="btn btn-secondary">Edit</a>
        </div>
        <div class="col-sm-1 col-md-1">
            <form action="/posts/{{$post->id}}" method="post">
                @csrf
                <div class="form-group">
                    <button type="submit" id="delete" name="delete" class="btn btn-danger">Delete</button>
                </div>
                <div class="form-group">
                    <input type="hidden" id="_method" name="_method" value="delete">
                </div>
            </form>
         </div>
    </div>
@endsection