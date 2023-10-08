<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class VerificationEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $verificationLink;
    public function __construct($user, $verificationLink)
    {
        $this->user = $user;
        $this->verificationLink = $verificationLink;
    }
    public function build()
    {
        return $this->markdown('auth.verify-email');
    }
}
