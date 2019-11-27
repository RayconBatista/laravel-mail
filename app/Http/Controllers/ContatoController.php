<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\UserRegistered;

class ContatoController extends Controller
{
    public function index()
    {
        return view('forms.contato');

    }

    public function enviaEmail(Request $request)
    {
        $validacao = $request->validate([
            'nome' => 'required',
            'email' => 'required|email',
            'mensagem' => 'required',
        ]);

        $nome = $request->nome;
        $email = $request->email;
        $mensagem = $request->mensagem;

        // Enviando o e-mail
        Mail::to('rayconbentes16@gmail.com')->send(new UserRegistered($nome, $email, $mensagem));
        $request->session()->flash('alert-success', 'Sua mensagem foi enviada, obrigado!');
        return redirect()->back();
    }

    public function store (Request $request)
    {
        if($request->file(photo)->isValid()){
            $request->file('photo')->store('images');
        }
    }
}
