
@extends('main')

@section('title', '| Home posts')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="jumbotron">
                <h1 class="display-4">Hello, this is my blog!</h1>
                <p class="lead">This is a simple blog with simple posts.</p>
                <hr class="my-4">
                <p>Through this blog, I demonstrate my technical knowledge of the programming language PHP and Laravel. Enjoy my project.</p>
                <p class="lead">
                    <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
                </p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8">
            <div class="post">
                <h3>Post Title</h3>
                <p>text</p>
                <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
            </div>
            <hr>
            <div class="post">
                <h3>Post Title</h3>
                <p>text</p>
                <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
            </div>
        </div>
        <div class="col-md-3 col-md-offset-1">
            <h3>Sidebar</h3>
        </div>
    </div>
@endsection