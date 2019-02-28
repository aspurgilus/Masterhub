@extends('layouts.master')

@section('title','Подтверждение Email')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <h2 class="card-header">Masterhub</h2>

                <div class="card-body">

                    <h4 class="alert alert-success">Регистрация прошла успешно</h4>
                    <p class="font-weight-bold">Добро пожаловать на Masterhub. Чтобы завершить регистрацию,<br>
                        подтвердите адрес электронной почты.</p>
                    <p class="font-weight-bold">Если вы не получили письмо, <a href="{{ route('verification.resend') }}">нажмите здесь</a>, чтобы отправить его еще раз.</p>
                </div>
            </div>
        </div>
    </div>

@endsection




