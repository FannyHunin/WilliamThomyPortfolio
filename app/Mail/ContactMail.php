<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($mailData)
    {
        $this->data = $mailData;
        //dd($mailData);
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        //dd($this->data->email);
        return $this->from(['email' => $this->data])->view('emails.contactMail')->with(['message' => $this->data]);
        // return $this->markdown('emails.contactMail');
    }
}
