@extends('layout')


@section('title')
    Blogs
@endsection


@section('css_files')
    <link rel="stylesheet" href="{{asset('static/css/blogpage/blog.css')}}">
@endsection


@section('content_1')
    <div class='title'>
        <h1>Our Blog & Articles</h1>
        <p>
            We consider all the drivers of change gives you the components you need to change to create a truly happens.
        </p>
    </div>

    <div class='blog-cards'>
    </div>

    <div class='signleblog'>
        <div class="align">
        </div>
    </div>
@endsection


@section('js_files')
    <script src="{{asset('static/js/blogs.js')}}" type="module"></script>
@endsection
