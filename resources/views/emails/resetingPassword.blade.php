@component('mail::message')
# Здравствуйте {{$name}}

Мы получили запрос на сброс вашего пароля. Вы можете задать новый пароль, перейдя по ссылке ниже.
Если запрос создан не вами, проигнорируйте это письмо. В таком случае, Ваш пароль останется прежним.

@component('mail::button', ['url' => $url])
Перейти к сбросу пароля
@endcomponent
Если у вас возникли проблемы с отображением кнопки, вы можете перейти по ссылке {{$url}}

С уважением,<br>
{{ config('app.name') }}
@endcomponent
