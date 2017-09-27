@component('mail::message')
# CREACION DE LIBROS

Estimado:<br>
Se publicò un nuevo libro por el usuario {{$user}}, y lleva como titulo {{$title}}.

@component('mail::button', ['url' => $path])
VER LIBRO
@endcomponent

Gracias,<br>
{{ config('app.name') }}
@endcomponent
