<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContactFormRequest;
use Mail;

class AboutController extends Controller
{
    public function create()
    {
        return view('bookings');
    }

public function store(ContactFormRequest $request)
{
   $validation = [
        'name'    => $request->get('name'),
        'email'   => $request->get('email'),
        'user_message' => $request->get('message')
    ];

        Mail::send('email.contact', $validation, function($message) use ($request)
        {
            $message->from($request->get('email'));
            $message->to('the.mikex@gmail.com', 'Admin')->subject('Scotski message');
        });
        $success = 'Thanks '. $request->get('name') .'. We have received your e-mail.';
        return \Redirect::route('contact')->with('message', $success);

}
}
