<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Mymail extends Mailable
{
    use Queueable, SerializesModels;

    public $email_content;
    public $text_area;
    public $image_content;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($email,$message)
    {
        $this->email_content = $email;
        $this->text_area = $message;
        // $this->image_content = $image;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('penidahill@laravel56.dev')
            ->view('email.mymail');
    }
}
