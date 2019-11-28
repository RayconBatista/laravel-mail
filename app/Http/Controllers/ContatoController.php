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
            'photo' => 'required'
        ]);

        $nome = $request->nome;
        $email = $request->email;
        $mensagem = $request->mensagem;
//        $photo = $request->photo;

        if($request->file('photo')->isValid())
        {
//            $nameFile = $request->nome . '.' . $request->photo->extension();
            $path = $request->photo->store('imagens');
            logger($path);
            ($request->photo);
        }


        // Enviando o e-mail

        Mail::send(new UserRegistered($nome, $email, $mensagem, $path));


        $request->session()->flash('alert-success', 'Sua mensagem foi enviada, obrigado!');
        return redirect()->back();
    }

    public function store(Request $request)
    {
        if($request->file('photo')->isValid()){
            $nameFile = $request-> nome . '.' . $request->photo->extension();
            $path = $request->photo->storeAs('imagens', $nameFile);
            logger($path);
            ($request->photo);
        }

        $request->session()->flash('alert-success', 'Sua mensagem foi enviada, obrigado!');
        return redirect()->back();
    }


}
