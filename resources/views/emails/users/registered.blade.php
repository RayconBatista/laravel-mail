@component('mail::message')
# Registrado com sucesso

Olá {{$user->name}} você foi retomado ao com sucesso no Alphart_Design

@component('mail::button', ['url' => 'https:www.youtube.com'])
Clique aqui para para o site
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
