<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class facilitiesController extends Controller
{

    public function getIndex() {
        return view('facilities');
    }
    public function getPistes() {
        return view('facilities.pistes');
    }
    public function getFood() {
        return view('facilities.food');
    }
    public function getGym() {
        return view('facilities.gym');
    }
    public function getHotel() {
        return view('facilities.hotel');
    }
    public function getSpa() {
        return view('facilities.spa');
    }
    public function getPenguinclub() {
        return view('facilities.penguinclub');
    }
}
