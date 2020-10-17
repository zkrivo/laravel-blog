<?php

namespace App\Http\Controllers;

use App\Models\Post;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    //naming conventison for simple slashroute
    public function index() {
        //interacting with the database using post model
        $posts = Post::all();
        //$posts = DB::table('posts')->simplePaginate(5);

        //another options for displaying data
        //$posts = Post::orderBy('name', 'desc')->get();
        //$posts = Post::where('type', 'photography')->get();
        //$posts = Post::latest()->get();
    
        return view('posts.index', ['posts' => $posts
        ]);
    }

    public function show($id) {
        $post = Post::findOrFail($id);
        //$post = DB::table('posts')->paginate(2);
        return view('posts.show', ['post' => $post]); 
    }

    public function create() {
        return view('posts.create');
    }

    public function store() {
        $post = new Post();
        $post->author = request('author');
        $post->category = request('category');
        $post->title = request('title');
        $post->tags = request('tags');
        $post->text = request('text');

        $post->save();
        // error_log(request('name'));
        // error_log(request('type'));
        // error_log(request('summary'));

        return redirect('/')->with('msg', 'Blog successfully created!');
    }

    public function destroy($id) {
        $post = Post::findOrFail($id);
        $post->delete();

        return redirect('/posts');
    }
}
