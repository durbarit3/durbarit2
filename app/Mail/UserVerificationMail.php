<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class UserVerificationMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $first_name;
    public $token;
    public function __construct($first_name,$token)
    {
        $this->first_name = $first_name;
        $this->token = $token;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $first_name = $this->first_name;
        $token = $this->token;
        return $this->view('frontend.accounts.verification_mail_template.user_verification_mail', compact('first_name', 'token'));
    }
}
