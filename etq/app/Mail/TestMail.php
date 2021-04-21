<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TestMail extends Mailable
{
    use Queueable, SerializesModels;
    public $data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $name = $this->data['name'];
        $surname = $this->data['surname'];


        return $this->from('nurgalievakamila7@gmail.com')
            ->subject('Subject email')
            ->view('email_template', compact('name', 'surname'))
            ->attach($this->data['file']->getRealPath(), [
                'as' => $this->data['file']->getClientOriginalName()
            ]);
        
    }
}
