<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Mail\TestGmail;
use App\Models\Gmail;
use Illuminate\Support\Facades\Mail;


class MailController extends Controller
{
    public function show() {
        $testgmail = Gmail::all();
        return view ("front/mail")->with(['testgmail' => $testgmail]);
    }
    public function sendMail()
    {
        $details = [
            'title' => 'b',
            'body' => ''
        ];
       
        Mail::to('zaynasghermalik@gmail.com')->send(new TestGmail($details));
        return ("Email has been sent successfully");   
    }
}