<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class BookMail extends Mailable
{
    use Queueable, SerializesModels;
    public $user,$path,$title;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user,$path,$title)
    {
       $this->user=$user;
       $this->path=$path;
       $this->title=$title;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $this->subject('Crearon un libro');
        $this->to(env('EMAIL_ADMIN','ernesto.liberio@gmail.com'));
        return $this->markdown('emails.books');
    }
}
