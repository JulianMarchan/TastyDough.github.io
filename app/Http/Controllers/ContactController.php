<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    
    public function show()
    {
        return view('contacts.show'); //to redirect
    }

    public function submit(ContactRequest $request)
    {
      Mail::to('myMail@email.com')->send(new ContactMail($request->name, $request->email, $request->contact, $request->message));
      return to_route('product');
    }

}
