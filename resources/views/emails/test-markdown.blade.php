@component('mail::message')
    # Olá {{ $user->name }}!

    <p>Esse é um e-mail de teste! =D</p>

    @component('mail::button', ['url' => $url, 'color' => 'green'])
        Visite o nosso site
    @endcomponent

    @component('mail::table')
        | id               | Nome                 | Telefone                 | E-mail                   |
        | ------------- |:-----------------:|:---------------------:| ---------------------------------:|
        | 1              | Carlos Ferreira   | (64) 98170-1406          | carlos@especializati.com.br   |
        | 2              | Other Name         | (64) 98170-1406         | other@especializati.com.br    |
    @endcomponent
    @endcomponent

    Obrigado,<br>
    {{ config('app.name') }}
@endcomponent
