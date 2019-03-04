<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Mail;
use App\Mail\SendRegistrationEmail;
use App\User;

class MainController extends Controller
{
    public function registerView() {
        return view('registerform');
    }

    public function register(Request $request) {
        $full_name = $request->full_name;
        $nic = $request->nic;
        $address = $request->address;
        $phone = $request->phone;
        $email = $request->email;
        $gender = $request->gender;
        $dob = $request->dob;
        $country = $request->country;
        $status = $request->status;
        Mail::to('nitsistem@gmail.com')->send(new SendRegistrationEmail($full_name, $nic, $address, $phone, $email, $gender, $dob, $country, $status));
        Session::flash("success");
        return redirect('/');
    }

    public function locale($locale) {
        Session::put('locale', $locale);
        return redirect()->back();
    }
}
