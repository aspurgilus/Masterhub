@component('mail::message')
# Здравствуйте {{$name}}!

Добро пожаловать на Masterhub. Чтобы завершить регистрацию, подтвердите адресс электронной почты.

@component('mail::button', ['url' => $url])
Подтвердить электронную почту
@endcomponent

С уважением,<br>
{{ config('app.name') }}
@endcomponent
