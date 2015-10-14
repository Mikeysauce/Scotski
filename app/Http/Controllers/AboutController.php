<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContactFormRequest;

class AboutController extends Controller
{
    public function create()
    {
        return view('bookings');
    }

public function store(ContactFormRequest $request)
{

    \Mail::send('email.contact',
        array(
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'user_message' => $request->get('message')
        ), function($message)
    {
        $message->from('support@scotski.co.uk');
        $message->to('the.mikex@gmail.com', 'Admin')->subject('Scotski message');
    });

  return \Redirect::route('contact')->with('message', 'Thanks for contacting us');

}
}
