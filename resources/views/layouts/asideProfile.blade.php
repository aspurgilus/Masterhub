<div class="w-100">

    <h4 class="ml-4">Настройки</h4>
    <ul class="list-group">
        <li class="list-group-item active"><a class="nav-link" style="color:white" href="{{ route('profile.edit',auth()->id()) }}">Редактировать профиль</a></li>
        <li class="list-group-item"><a class="nav-link" href="#">Фото профиля</a></li>
        <li class="list-group-item"><a class="nav-link" href="#">Электронный ящик</a></li>
        <li class="list-group-item"><a class="nav-link" href="#">Телефон</a></li>
        <li class="list-group-item"><a class="nav-link" href="#">Пароль</a></li>
    </ul><br>

    {{--<ul class="nav nav-tabs mb-3">--}}
        {{--<li class="nav-item"><a class="nav-link active" href="{{ route('profile.edit',auth()->id()) }}">Редактировать профиль</a></li>--}}
        {{--<li class="nav-item"><a class="nav-link" href="#">Фото профиля</a></li>--}}
        {{--<li class="nav-item"><a class="nav-link" href="#">Электронный ящик</a></li>--}}
        {{--<li class="nav-item"><a class="nav-link" href="#">Телефон</a></li>--}}
        {{--<li class="nav-item"><a class="nav-link" href="#">Пароль</a></li>--}}
    {{--</ul>--}}
</div>