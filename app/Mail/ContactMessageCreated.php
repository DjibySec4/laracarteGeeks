<?php

namespace App\Mail;
 
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Message;

class ContactMessageCreated extends Mailable
{
    use Queueable, SerializesModels;

    public $msg;
    /**
     * Create a new message instance.
     *
     * @return void
     */


    //  nouveau
     public function __construct(Message $msg)
    {
        $this->msg = $msg;
    }

    //  encien

    // public function __construct($name, $email, $msg)
    // {
    //     $this->name = $name;
    //     $this->email = $email;
    //     $this->msg = $msg;
    // }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.messages.create');
    }
}
