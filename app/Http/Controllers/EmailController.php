<?php

namespace App\Http\Controllers;

use Mail;
use App\Mail\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class EmailController extends Controller
{
    //
    public function index(Request $request)
    {
       
       
        $to_name = Config::get('globalconstants.AppConstants.recipient_name');
        $to_email = Config::get('globalconstants.AppConstants.recipient_mail');
        $from_email = $request->inputEmail;
        $from_name = $request->inputName;
        $testMailData = array(
            'title'=>'Hi! I am '.$request->inputName,
            'body' => $request->inputMessage);

        Mail::send('emails.testMail', $testMailData, function($message) use ($to_name, $to_email,$from_email,$from_name) {
            $message->to($to_email, $to_name)
            ->subject('Laravel Test Mail');
            $message->from($from_email ,$from_name);
            });
        return "success";
    }
}
