<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AttachmentMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void C:\xampp\htdocs\crud-app\storage\app\public\images\1647158445.png
     */
    public function __construct()
    {
        //C:\xampp\htdoC:\xampp\htdocs\crud-app\storage\app\public\images\1647236597.jpg
    }
    public function build()
    {
        return $this->markdown('emails.attachment')
        ->subject('Hi,chandrashekhar sharnagat')
        ->attach(public_path('storage\images\1647236597.jpg'));
    }
}
