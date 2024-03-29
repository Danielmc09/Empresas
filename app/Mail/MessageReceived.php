<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class MessageReceived extends Mailable
{
    use Queueable, SerializesModels;

    public $msg;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($datosEmpresa)
    {
        $this->msg = $datosEmpresa;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('empresa.email');
    }
}
