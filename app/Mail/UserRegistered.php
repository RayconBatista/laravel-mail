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
    public $path;

    public function __construct($nome, $email, $mensagem, $path)
    {
        $this->nome = $nome;
        $this->email = $email;
        $this->mensagem = $mensagem;
        $this->path = $path;
    }

    public function build()
    {

       $this->to('rayconbentes16@gmail.com');
       $this->to('jpaulolxm@gmail.com');

        $this->from('rayconlimabatista18@gmail.com')
                    ->subject('Alphart Design')
                    ->view('emails.contato')
                    ->attach(storage_path ('app/public/'. $this->path));

    }
}
