
@extends('main')

@section('title', '| Home posts')

@section('content')
    <h1>Edit Post</h1>
    
    <form action="/posts/{{$post->id}}" method="post">
      @csrf
        <div class="form-group">
          <label for="title">Title</label>
          <input type="text" class="form-control" id="title" name="title" value="{{$post->title}}" aria-describedby="title" placeholder="Enter title">
        </div>
        <div class="form-group">
            <label for="body">Body</label>
            <textarea class="form-control" id="body" name="body" value="{{$post->body}}" aria-describedby="body">{{$post->body}}</textarea>
          </div>
        <button type="submit" class="btn btn-dark">Submit</button>
        <div class="form-group">
            <input type="hidden" id="_method" name="_method" value="put">
        </div>
    </form>
@endsection