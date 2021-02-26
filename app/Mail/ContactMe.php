<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMe extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        /** usando view*/
           return $this->view('emails.contact-me')
            ->subject('Saiba mais sobre este blog!');

        /** usando markdown
        return $this->markdown('emails.contact-me')
            ->subject('Saiba mais sobre este blog!');*/
    }
}
