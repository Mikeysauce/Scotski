<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\PostsRequest;
use App\Post;
use Auth;
use Input;
use Carbon\Carbon;

class PostsController extends Controller
{

    public function index() {
        if (!Auth::check()) return \Redirect::to('home');
        $posts = Post::all();
        return view('posts.view', ['posts' => $posts]);
     }
    public function store(PostsRequest $request) {
        if (!Auth::check()) return \Redirect::to('home');
        $post = new Post;
        $post->title = $request->input('title');
        $post->content = $request->input('content');
        $post->created_at = Carbon::now();
        $post->save();


        $posts = Post::all();
        return \Redirect::route('posts', ['posts' => $posts])->with('message', 'Your post has been created!');    }
    public function update()
    {
        if (!Auth::check()) return \Redirect::to('home');
        $post = Post::find(Input::get('id'));
        $post->content = Input::get('content');
        $post->updated_at = Carbon::now();
        if (Input::get('content') == '') {
        $post->delete();
        } else {
        $post->save();
        }
        $posts = Post::all();
        return \Redirect::route('posts', ['posts' => $posts])->with('message', 'Your post has been updated!');
        // return view('posts.create', ['posts' => $posts]);
    }
}
