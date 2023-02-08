<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //Show all posts
    public function index() {
        return view('posts.index', [
            'posts' => Post::latest()->filter(request(['tag', 'search']))->get()
        ]);
    }

    //Show single post
    public function show(Post $post) {
        return view('posts.show', [
            'post' => $post
        ]);
    }

    //Show create form
    public function create() {
        return view('posts.create');
    }

    //Store Post Data
    public function store(Request $request) {
        $formFields = $request->validate([
            'title' => 'required',
            'user' => 'required',
            'description' => 'required',
            'github' => 'required'

        ]);

        Post::create($formFields);

        return redirect('/');
    }
}

