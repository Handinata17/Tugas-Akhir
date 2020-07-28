<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public $data;
    public $token;
    public $status;

    public function __construct($data, $token, $status)
    {
      $this->data = $data;
      $this->token = $token;
      $this->status = $status;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $data = $this->data;
        $token = $this->token;
        $status = $this->status;
        
        return $this->view('email.email', compact('data','token','status'));
    }
}
