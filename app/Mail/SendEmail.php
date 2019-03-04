<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $phone;
    public $field;
    public $message;
    
    public function __construct($name, $phone, $field, $message)
    {
        $this->name = $name;
        $this->phone = $phone;
        $this->field = $field;
        $this->message = $message;
    }

    public function build()
    {
        $name = $this->name;
        $phone = $this->phone;
        $field = $this->field;
        $e_message = $this->message;
        $subject = 'New contact from NCHS Web';

        return $this->view('sendemail', compact("message"))->subject($subject)->with(['name'=>$name, 'phone'=>$phone, 'field'=>$field, 'e_message'=>$e_message ]);
    }
}
