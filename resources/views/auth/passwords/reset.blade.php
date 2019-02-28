@extends('layouts.master')

@section('title','Смена пароля')


@section('content')

        <div class="justify-content-center">
            <div class="col-md-4 mx-auto card px-0">
                <div class="card-header text-center"><h2>Сброс пароля</h2>
                </div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('password.update') }}">
                            @csrf

                            <input type="hidden" name="token" value="{{ $token }}">

                                <div class="col-md-6 mx-auto">
                                    <label for="email" class="col-form-label font-weight-bold">Электронный адресс</label>
                                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $email ?? old('email') }}" required autofocus>

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="col-md-6 mx-auto">
                                    <label for="password" class="col-form-label font-weight-bold">Введите новый пароль</label>
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


                                <div class="col-md-6 mx-auto mt-3">
                                    <button type="submit" class="btn btn-primary">
                                        Восстановить пароль
                                    </button>
                                </div>
                        </form>
                    </div>
            </div>
        </div>
@endsection
