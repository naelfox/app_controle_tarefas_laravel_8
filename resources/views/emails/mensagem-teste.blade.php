@component('mail::message')
# Introdução

O Corpo da mensagem

    @component('mail::button', ['url' => ''])
    Texto do Botão
    @endcomponent

Obrigado,<br>
{{ config('app.name') }}
@endcomponent
