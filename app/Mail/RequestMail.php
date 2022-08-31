<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Auth;

class RequestMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public $data;

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
        return $this->from('noreply@blockaid.com', 'Blockaid')
            ->subject('Blockaid - Payment Request from ' . Auth::user()->name)
            ->markdown('mails.requestpayment')
            ->with([
                'name' => $this->data['name'],
                'email' => $this->data['email'],
                'amount' => $this->data['amount'],
                'note' => $this->data['note'],
                'url' => $this->data['url'],
            ]);
    }
}
