<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendRegistrationEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $full_name;
    public $nic;
    public $address;
    public $phone;
    public $email;
    public $gender;
    public $dob;
    public $country;
    public $status;

    public function __construct($full_name, $nic, $address, $phone, $email, $gender, $dob, $country, $status)
    {
        $this->full_name = $full_name;
        $this->nic = $nic;
        $this->address = $address;
        $this->phone = $phone;
        $this->email = $email;
        $this->gender = $gender;
        $this->dob = $dob;
        $this->country = $country;
        $this->status = $status;
    }

    public function build()
    {
        $full_name = $this->full_name;
        $nic = $this->nic;
        $address = $this->address;
        $phone = $this->phone;
        $email = $this->email;
        $gender = $this->gender;
        $dob = $this->dob;
        $country = $this->country;
        $status = $this->status;
        $subject = "A New Registration For NCHS";
        return $this->view('registerdetails')->subject($subject)->with([
            'full_name'=>$full_name,
            'nic'=>$nic,
            'address'=>$address,
            'phone'=>$phone,
            'email'=>$email,
            'gender'=>$gender,
            'dob'=>$dob,
            'country'=>$country,
            'status'=>$status,
            'subject'=>$subject
        ]);
    }
}
