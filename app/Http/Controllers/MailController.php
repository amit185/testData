<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\NotifyMail;

class MailController extends Controller
{
    public function test_mail(){
        $request = Mail::send('mail_template', ["name"=>"Amit","email"=>"testmail.com"], function($message)  {
                            
            $message->to('erakazm1996@gmail.com')->subject('Confirmation Tour Booking');
            
            $message->from('chetu.amitkumar@gmail.com','ByoJeep');
        });
        dd($request);
        // if (Mail::failures()) {
        //     return response()->json('Sorry! Please try again latter');
        // }else{
        //     return response()->success('Great! Successfully send in your mail');
        // }
    }
}
