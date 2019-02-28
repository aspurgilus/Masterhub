@extends('layouts.master')

@section('title','Вход')

@section('content')
    <div class="container mt-lg-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <h2 class="col-md-6 text-center mx-auto font-weight-bold">Вход</h2>

                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="col-md-6 mx-auto">
                                <label for="email" class="col-form-label font-weight-bold">Адресс электронной почты</label>
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="col-md-6 mx-auto">
                                <label for="password" class="col-form-label font-weight-bold">Пароль</label>
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="col-md-6 mx-auto mt-2 mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        Запомнить меня
                                    </label>
                                </div>
                            </div>


                            <div class="row col-md-6 mx-auto">

                                <button type="submit" class="btn btn-primary px-4">
                                    Войти
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link offset-2" href="{{ route('password.request') }}">
                                        Напомнить пароль
                                    </a>
                                @endif

                            </div>
                        </form>

                        @if (Route::has('register'))
                            <div class="col-md-6 mx-auto mt-3">
                                <label class="col-form-label font-weight-bold" for="register">Не зарегистрированы на Masterhub?</label>
                                <a class="registerLink col-md-8" id="register" href="{{ route('register') }}">Зарегистрироваться</a>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
