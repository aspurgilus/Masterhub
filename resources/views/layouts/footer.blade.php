<div class="row justify-content-center mb-3">
    <a class="mr-5" href="#">Masterhub,Inc</a>
    <a class="mr-5" href="#">Помощь</a>
    <a class="mr-5" href="#">Конфиденциальность</a>
    <a class="mr-5" href="#">Условия</a>
    <a class="mr-5" href="#">Карьера</a>
    <a href="#">О нас</a>
</div>
@if(auth()->check())
    <div class="col-md-2 mx-auto mb-4 py-2">
        <a class="subscribeLink offset-3" id="bgred" href="{{route('admin.home')}}">Админ Панель</a>
    </div>
@endif







