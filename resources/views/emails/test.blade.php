<html>
<body>
<img src="{{ $message->embed($pathToFile) }}" alt="Logo Aqui">
<p>Olá {{ $user->name }}!</p>
<p></p>
<p>Esse é apenas um e-mail de teste, para exemplificar o funcionamento do envio de e-mails no Laravel.</p>
<p></p>
<p>Att, <br>
    Raycon Lima!</p>
</body>
</html>
