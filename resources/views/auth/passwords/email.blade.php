@extends('layouts.master')

@section('title','Сброс пароля')


@section('content')

        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="col-md-8 mx-auto mt-3"><h2 class="font-weight-bold">Сброс пароля</h2></div>
                    <div class="col-md-8 mx-auto mt-3">
                        <p class="font-weight-bold fontsizeSmaller">Введите адресс электронной почты, связанный с вашим аккаунтом на Masterhub, и мы вышлем вам ссылку для изменения пароля</p>
                    </div>
                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <div class="col-md-8 mx-auto">
                            <label for="email" class="col-form-label font-weight-bold">Адресс электронной почты</label>
                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="col-md-8 mx-auto my-3">
                            <button type="submit" class="btn btn-primary">
                                Отправить ссылку для сброса
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

@endsection
