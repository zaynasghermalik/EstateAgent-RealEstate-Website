<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class EmailController extends Controller
{
    //
    public function create()
    {
        return view('mail/mail');
    }

    public function sendEmail(Request $request)
    {
        $request->validate([
          'email' => 'required|email',
          'subject' => 'required',
          'content' => 'required',
          'attach' =>  'mimes: jfif,jpeg,png,jpg,gif,svg,txt,pdf,ppt,docx,doc,xls',
        ]);

        $data = [
          'email' => $request->email,
          'subject' => $request->subject,
          'content' => $request->content,
          'attach' => $request->attach
        ];

        Mail::send('mail/email-template', $data, function($message) use ($data) {
          $message->to($data['email'])
          ->subject($data['subject']);
         
          if($data['attach']){
            $message->attach($data['attach']->getRealPath(), [
              'as' => '' . $data['attach']->getClientOriginalName(),
              'mime' => $data['attach'] ->getMimeType()]);
          }
        });

        return back()->with(['message' => 'Email Successfully Sent To! ('.$data['email'].')']);
    }
}

