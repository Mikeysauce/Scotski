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

    public function index() {
        if (!Auth::check()) abort(404);
        $posts = Post::all();
        return view('posts.view', ['posts' => $posts]);
     }
    public function store(PostsRequest $request) {
        if (!Auth::check()) return \Redirect::to('home');
        $post = new Post;
        $post->title = $request->input('title');
        $post->content = $request->input('content');
        $post->save();
        $posts = Post::all();
        $winner = 'Your post "'. $post->title .'" has been created.';
        return \Redirect::route('posts', ['posts' => $posts])->with('message', $winner);
    }
    public function update() {
        if (!Auth::check()) return \Redirect::to('home');
        $post = Post::find(Input::get('id'));
        $post->content = Input::get('content');
        if (Input::get('content') == '') {
        $post->delete();
        $posts = Post::all();
        $winner = 'Your post "'. $post->title .'" has been deleted.';
        return \Redirect::route('posts', ['posts' => $posts])->with('message', $winner);
        }
        else {
        $post->save();
        $posts = Post::all();
        $winner = 'Your post "'. $post->title .'" has been updated.';
        return \Redirect::route('posts', ['posts' => $posts])->with('message', $winner);
        }
    }
}
