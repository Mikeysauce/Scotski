<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use Auth;

class HomeController extends Controller
{
	public function home() {
        return view('home');
    }
    public function facilities() {
        return view('facilities');
    }
		public function locations() {
		return view('locations');
	}
		public function welcome() {
            return view ('welcome');
    }
}



