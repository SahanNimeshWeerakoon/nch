<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\SendEmail;
use Session;

class MailController extends Controller
{
    public function sendEmail(Request $request) {
        $name = $request->name;
        $phone = $request->phone;
        $field = $request->field;
        $e_message = $request->message;

        Mail::to('nitsistem@gmail.com')->send( new SendEmail($name, $phone, $field, $e_message) );
        Session::flash("success");
        return redirect('/');
    }
}
