<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\PostsRequest;
use App\Post;
use Auth;

class PostsController extends Controller
{

    public function create() {
        if (!Auth::check()) return \Redirect::to('home');
        return view('posts.create');
     }
    public function store(PostsRequest $request) {

        // dd($request->all());
        // dd(\App::environment());

        $post = new Post;
        $post->title = $request->input('title');
        $post->content = $request->input('content');
        $post->save();

        $posts = Post::all();
        return view('home', ['posts' => $posts]);

    }
}
