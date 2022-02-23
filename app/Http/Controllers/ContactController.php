<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactEmail;
use Mail;

class ContactController extends Controller
{
    public function sendMail(Request $request){
        $details = [
            'title' => 'お問い合わせをお願いします。',
            'name' => $request->name,
            'post_code' => $request->post_code,
            'address' => $request->address,
            'tel' => $request->tel,
            'email' => $request->email,
            'body' => $request->body
        ];
        Mail::to("yosuke8509@icloud.com")->send(new ContactEmail($details) );
        return redirect()->route('top');
    }
}
