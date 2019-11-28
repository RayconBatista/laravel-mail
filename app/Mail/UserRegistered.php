<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class UserRegistered extends Mailable
{
    use Queueable, SerializesModels;

    public $nome;
    public $email;
    public $mensagem;
    public $photo;

    public function __construct($nome, $email, $mensagem, $photo)
    {
        $this->nome = $nome;
        $this->email = $email;
        $this->mensagem = $mensagem;
        $this->photo = $photo;
    }

    public function build()
    {
        return $this->from('rayconlimabatista18@gmail.com')
                    ->subject('Alphart Design')
                    ->view('emails.contato')
                    ->attach(storage_path('app/imagens/', $this.photo));

    }
}
