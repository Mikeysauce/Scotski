<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\PostsRequest;
use App\Post;
use Auth;
use Input;

class PostsController extends Controller
{

    public function create() {
        if (!Auth::check()) return \Redirect::to('home');
        $posts = Post::all();
        return view('posts.create', ['posts' => $posts]);
     }
    public function store(PostsRequest $request) {
        if (!Auth::check()) return \Redirect::to('home');
        $post = new Post;
        $post->content = $request->input('content');
        $post->save();

        $posts = Post::all();
        return view('home', ['posts' => $posts]);
    }
    public function update()
    {
        if (!Auth::check()) return \Redirect::to('home');
        $post = Post::find(Input::get('id'));
        $post->content = Input::get('content');
        if (Input::get('content') == '') {
        $post->delete();
        } else {
        $post->save();
        }
        return view('posts/create');
    }
}
