@extends('emails.layouts.app')

@section('content')
    <h1>
        Alphart Design
    </h1>
    <hr>
    <p>
        <strong>Nome:</strong> {{$nome}}<br>
        <strong>E-mail:</strong> {{$email}}<br>
        <strong>Mensagem:</strong> {{$mensagem}} <br>
    </p>
    <hr>
    <div>
        <p>
            <a href="http://localhost:81" title="Alphart Design">
                Gráfica Alphart Design Ltda.
            </a>
            <br>
            Av. Nova, 1265<br>
            Cidade Fantasma – CEP 023657-110<br>
            Cidade Nova – SP – Brasil<br>
            Tel.: +55 11 5252-2525
        </p>
@endsection
