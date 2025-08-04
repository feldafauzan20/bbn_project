<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(public array $details) {}

public function build()
{
    return $this->subject('Pesan Baru dari Contact Form Website BBN')
                ->view('emails.contact');
}

}
