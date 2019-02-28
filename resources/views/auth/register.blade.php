@extends('layouts.master')

@section('title','Регистрация')

@section('content')

        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card">
                    <h2 class="col-md-6 text-center mx-auto font-weight-bold">Регистрация</h2>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="col-md-6 mx-auto">
                                <label for="email" class="col-form-label font-weight-bold ">Адресс электронной почты</label>
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="col-md-6 mx-auto">
                                <label for="name" class="col-form-label font-weight-bold">Имя: </label>
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="col-md-6 mx-auto">
                                <label for="surname" class="col-form-label font-weight-bold">Фамилия: </label>
                                <input id="surname" type="text" class="form-control{{ $errors->has('surname') ? ' is-invalid' : '' }}" name="surname" value="{{ old('surname') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="col-md-6 mx-auto">
                                <label for="fathername" class="col-form-label font-weight-bold">Отчество: <br><span class="hint">(необязательно)</span></label>
                                <input id="fathername" type="text" class="form-control{{ $errors->has('fathername') ? ' is-invalid' : '' }}" name="fathername" value="{{ old('fathername') }}">

                                @if ($errors->has('fathername'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('fathername') }}</strong>
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

                            <div class="col-md-6 mx-auto">
                                <label for="password-confirm" class="col-form-label font-weight-bold">Подтвердите пароль</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>

                            <p class="col-md-6 mx-auto mt-1">
                                Регистрируясь, вы соглашаетесь с<br><a href="#">пользовательским соглашением</a>
                            </p>


                            <div class="col-md-6 mx-auto">
                                <button type="submit" class="btn btn-primary">
                                    Регистрация
                                </button>
                            </div>
                        </form>

                        @if (Route::has('login'))
                            <div class="col-md-6 mx-auto mt-3">
                                <label class="col-form-label font-weight-bold" for="login">У вас уже есть аккаунт на Masterhub?</label>
                                <a class="registerLink col-md-3" id="login" href="{{ route('login') }}">Войти</a>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>

@endsection
