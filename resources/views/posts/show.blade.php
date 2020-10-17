@extends('layouts.app')

@section('content')
<div class="header-div">
    <a href="/"><i class="fas fa-home"></i></a>
    <h1 class="title">Blog by {{ $post->author }}</h1>
</div>
<div class="blog-details shadow-blue">
    <p class="category">
        Category: {{ $post->category }}
    </p>
    <!-- <p class="tags">Tags: </p> -->
    <ul>
        @foreach($post->tags as $tag)
            <li>#{{ $tag }}</li>
        @endforeach
    </ul>
    <h2 class="blog-title">
        {{ $post->title }}
    </h2>
    <p class="blog-text">{{ $post->text }}</p>
    <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
        @csrf 
        <!-- overriding the post request -->
        @method('DELETE')
        <button class="button">Delete Post</button>
    </form>
</div>
<a href="/posts" class="back"><- Back to all posts</a>
@endsection