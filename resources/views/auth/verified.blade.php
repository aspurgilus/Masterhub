@extends('layouts.master')

@section('title','Email подтвержден')

@section('content')
    <div class="col-sm-4 mx-auto text-center">
        <h4 class="alert alert-success">Вы успешно подтвердили электронную почту</h4>
        <a class="subscribeLink" href="{{ route('main') }}">Вернуться на главную</a>
        <p class="mt-3">Или в <a href="{{ route('home') }}">Личный кабинет</a></p>
    </div>
@endsection