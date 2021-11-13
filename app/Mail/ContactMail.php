<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        //
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject($this->data['subject'])
            ->view('emails.contact')
            ->text('emails.contact_text')
            ->from($this->data['email'])
            ->with([
                'firstname' => $this->data['firstname'],
                'lastname' => $this->data['lastname'],
                'email' => $this->data['email'],
                'subject' => $this->data['subject'],
                'content' => $this->data['content'],
                'message' => $this
            ]);
    }
}
