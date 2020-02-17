@component('mail::message')
# Bienvenido a: {{ config('app.name') }}

Recives este mensaje por registrarte en nuestro sitio

@component('mail::button', ['url' => "{{ config('app.url') }}"])
Retornar el sitio web: {{ config('app.name') }}
@endcomponent

Gacrias,<br>
{{ config('app.name') }}
@endcomponent
