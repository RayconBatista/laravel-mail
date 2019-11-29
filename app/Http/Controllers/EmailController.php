<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\UserRegistered;

class EmailController extends Controller
{
    public function index(){
//        return view('emails.users.registered');
        return view('forms.contato');
    }

    public function enviaEmail(Request $request)
    {
        $validacao = $request->validate([
            'nome' => 'required',
            'email' => 'required|email',
            'mensagem' => 'required',
        ]);

        // Enviando o e-mail
//        Mail::to('rayconlimabatista@gmail.com')->send(new UserRegistered($nome, $email, $mensagem));

        // Implementar método aqui
        $request->session()->flash('alert-success', 'Só falta enviarmos de verdade agora!');
        return redirect()->back();
    }
}
