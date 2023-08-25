<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Mail; 
use App\Mail\ContactMail;


class ContactController extends Controller
{
    public function sendEmail(Request$request)
    {
        $details = [
            'name'=> $request->name,
            'email'=> $request->email,
            'phone'=> $request->phone,
            'address'=> $request->address,
            'msg'=> $request->msg,
            
            
        ];
        Mail::to('monoartasik.cse@gmail.com')->send(new ContactMail($details));
        // Alert::success('Congrats', 'Successfully Message _sent');
        return redirect()->back();;
    }
}
