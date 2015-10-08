<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\PostsRequest;
use App\Post;

class PostsController extends Controller
{
    public function create() {
    	return view('posts.create');
    }

    public function store(PostsRequest $request) {
    	//dd($request->all());

    	// dd(\App::environment());

    	$post = new Post;
    	$post->title = $request->input('title');
    	$post->content = $request->input('content');
    	$post->save();
    	return 'yay we saved';
    	
    }    
}
