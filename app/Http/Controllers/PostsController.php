<?php

namespace App\Http\Controllers;

use Gate;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Post;

class PostsController extends Controller
{
    public function show($id)
    {
        //auth()->loginUsingId(1);

        $post = Post::findOrFail($id);


        //$this->authorize('show-post', $post);
        // if (Gate::denies('show-post', $post)) {
        //     abort(403, 'Sorry, not sorry.');
        // }
        return view('posts.show', compact('post'));
    }

}
