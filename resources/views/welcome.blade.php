@extends('layouts.layout')

@section('content')
    @if (Route::has('login'))
    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block register-bar">
        @auth
        <!-- <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a> -->
        @else
        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline register">Login</a>

        @if (Route::has('register'))
        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline register">Register</a>
        @endif
        @endif
    </div>
    @endif

    <div style="height: 500px"></div>
    <p class="msg">{{ session('msg') }}</p>
    <div class="header-box shadow-blue">
        <h1>Blog House</h1>
        <div class="links">
            <a href="/posts">Read Posts</a>
            <a href="{{ route('posts.create') }}">Create Blog Post</a>
        </div>
    </div>
@endsection