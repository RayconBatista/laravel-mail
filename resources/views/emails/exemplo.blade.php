@extends('emails.layouts.app')

@section('content')


            <p>
                <strong>Exemplo:</strong> 2<br>
                <strong>Nome:</strong> {{$nome}}<br>
                <strong>E-mail:</strong> {{$email}}<br>
                <strong>Mensagem:</strong> {{$mensagem}} <br>
            </p>

            <hr>



@endsection
