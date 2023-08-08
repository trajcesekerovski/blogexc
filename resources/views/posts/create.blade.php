
@extends('main')

@section('title', '| Home posts')

@section('content')
    <h1>Create Post</h1>
    
    <form action="/posts" method="post">
      @csrf
        <div class="form-group">
          <label for="title">Title</label>
          <input type="text" class="form-control" id="title" name="title" aria-describedby="title" placeholder="Enter title">
        </div>
        <div class="form-group">
            <label for="body">Body</label>
            <textarea class="form-control" id="body" name="body" aria-describedby="body" placeholder="Enter body"></textarea>
          </div>
        <button type="submit" class="btn btn-dark">Submit</button>
    </form>
@endsection