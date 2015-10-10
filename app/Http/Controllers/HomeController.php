<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use Auth;
use App\Post;

class HomeController extends Controller
{

	public function home() {

        $posts = Post::all();
        return view('home', ['posts' => $posts]);

        // $data = [
        // 'test' => 'Something',
        // 'another' => 'another test for me',
        // 'again' => 'yet another test'
        // ];

        //return view('home', $data);
    }
	public function locations() {
		return view('locations');
	}
    public function glencoe() {
        return view('locations.glencoe');
    }
	public function welcome() {
        return view ('welcome');
    }
    public function penguinclub() {
        return view ('penguinclub');
    }
    public function onemore() {
        return view ('onemore');
    }
}



