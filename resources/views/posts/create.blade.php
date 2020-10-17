@extends('layouts.app')

@section('content')
<div class="header-div">
    <a href="/"><i class="fas fa-home"></i></a>
    <h1 class="title create">Create New Blog Post</h1>
</div>
<div class="create-post shadow-blue">
    <form action="/posts" method="POST">
    <!-- blade directive for error handling -->
    @csrf
    <div class="general-info">
        <label for="author">Name:</label>
        <input type="text" id="author" name="author" class="input">
        <label for="category">Category: </label>
        <select name="category" id="category">
            <option value="photography">Photography</option>
            <option value="books">Books</option>
            <option value="travel">Travel</option>
            <option value="bujo">Bujo</option>
        </select>
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" class="input">
    </div>
        <label for="">Tags:</label>
        <fieldset>
            <input type="checkbox" name="tags[]" value="read">read<br/>
            <input type="checkbox" name="tags[]" value="travel">travel<br/>
            <input type="checkbox" name="tags[]" value="photo">photo<br/>
            <input type="checkbox" name="tags[]" value="happy">happy<br/>
            <input type="checkbox" name="tags[]" value="creative">creative<br/>
            <input type="checkbox" name="tags[]" value="sun">sun<br/>
        </fieldset>
        <label for="text">Your story goes here: </label><br/>
        <input type="text" name="text" id="text" class="blog-text"><br/>
        <input type="submit" value="Create Blog" class="button">
    </form>
</div>
@endsection