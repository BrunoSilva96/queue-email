@component('mail::message')

<h1>Estamos testando filas</h1>
@component('mail::button', ['url' => 'https://youtube.com.br'])
  Acessar YT
@endcomponent

<p>Aobaaa, será que ta funcionando, {{$user->name}}?</p>
@endcomponent