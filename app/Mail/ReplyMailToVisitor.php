<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ReplyMailToVisitor extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $reply_subject;
    public $reply_name;
    public $reply_content;
    public function __construct($reply_subject, $reply_content, $reply_name)
    {
        $this->$reply_subject = $reply_subject;
        $this->$reply_content = $reply_content;
        $this->$reply_name = $reply_name;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $reply_subject = $this->reply_subject;
        $reply_content = $this->reply_content;
        $reply_name = $this->reply_name;
        return $this->view('admin.ecommerce.send_mail.mail_template.reply_mail_template', compact('reply_subject', 'reply_content', 'reply_name'));
    }
}
