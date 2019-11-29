<?php

namespace App\Mail;

use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMailUser extends Mailable
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
        return $this->from('rayconlimabatista18@gmail.com')
            ->markdown('emails.test-markdown')
            ->with([
                'user'     => $this->user,
                'url'     => route('home'),
            ]);
        $id = 1;
        $user = User::where('id', $id)->first();
        Mail::to('rayconbentes16@gmail.com')->send(new SendMailUser());
    }
}
