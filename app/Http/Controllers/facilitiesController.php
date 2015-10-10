<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class facilitiesController extends Controller
{

    public function index() {
        return view('facilities');
    }
    public function scenery() {
        return view('facilities.scenery');
    }
    public function food() {
        return view('facilities.food');
    }
    public function gym() {
        return view('facilities.gym');
    }
    public function hotel() {
        return view('facilities.hotel');
    }
    public function spa() {
        return view('facilities.spa');
    }
    public function penguinclub() {
        return view('facilities.penguinclub');
    }
}
