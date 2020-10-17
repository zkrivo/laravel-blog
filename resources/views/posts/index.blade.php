@extends('layouts.app')

@section('content')
<div>
    <div class="header-div">
        <a href="/"><i class="fas fa-home"></i></a>
        <h1 class="title">Posts List</h1>
    </div>

    @foreach($posts as $post)
    <div class="blog-post shadow-blue">
        <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
    </div>
    @endforeach
</div>
@endsection