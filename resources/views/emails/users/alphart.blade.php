
Bem Vindo ao curso {{ $curso }}

@component('mail::message')
    # Registrado com sucesso

    Bem vindo Sr(a). {{ $user->name }}, você foi registrado no {{$curso}}.

    @component('mail::button', ['url' => 'https:www.youtube.com'])
        Clique aqui para para o site
    @endcomponent

    Thanks,<br>
    {{ config('app.name') }}
@endcomponent
