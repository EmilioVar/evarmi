<x-mail::message>
# Correo de <b>{{ $email }}</b>

<p>
    {{ $message }}
</p>

Gracias,<br>
{{ config('app.name') }}
</x-mail::message>
