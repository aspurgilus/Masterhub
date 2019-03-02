<div class="adminAside h-100">
    <div class="bgRoyalBlue"><a class="adminAsideLink w-100 h-100 pl-4 py-2" href="{{ route('admin.home') }}"><h4>Masterhub</h4></a></div>
    <ul class="list-group adminAsideMenu mt-2">
        <li class="{{$active == 1 ? 'bgRoyalBlue':''}}"><a class="adminAsideLink w-100 h-100 pl-4 py-2" href="{{ route('admin.users.index') }}">Пользователи</a></li>
        <li><a class="adminAsideLink w-100 h-100 pl-4 py-2" href="#">Школы</a></li>
        <li><a class="adminAsideLink w-100 h-100 pl-4 py-2" href="#">Отзывы</a></li>
        <li><a class="adminAsideLink w-100 h-100 pl-4 py-2" href="#">Поддержка</a></li>
    </ul>
</div>