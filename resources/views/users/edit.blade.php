@extends('layouts.master')

@section('title','Редактирование профиля')

@section('content')
    <div class="container-fluid row">
        <div class="col-md-2">
            @include('layouts.asideProfile')
        </div>
        <div class="col-md-6">
            <div class="text-center mb-4"><h2>Редактировать профиль</h2></div>

            <form action="{{ route('profile.update',[$user->id]) }}" method="POST">
                @method('PATCH')
                @csrf

                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right font-weight-bold">Имя </label>

                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{$user->name }}" required autofocus>

                        @if ($errors->has('name'))
                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                        @endif
                    </div>
                </div>

                <div class="form-group row">
                    <label for="surname" class="col-md-4 col-form-label text-md-right font-weight-bold">Фамилия </label>

                    <div class="col-md-6">
                        <input id="surname" type="text" class="form-control{{ $errors->has('surname') ? ' is-invalid' : '' }}" name="surname" value="{{$user->surname }}" required autofocus>

                        @if ($errors->has('surname'))
                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('surname') }}</strong>
                                        </span>
                        @endif
                    </div>
                </div>

                <div class="form-group row">
                    <label for="fathername" class="col-md-4 col-form-label text-md-right font-weight-bold">Отчество </label>

                    <div class="col-md-6">
                        <input id="fathername" type="text" class="form-control{{ $errors->has('fathername') ? ' is-invalid' : '' }}" name="fathername" value="{{$user->fathername }}">

                        @if ($errors->has('fathername'))
                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('fathername') }}</strong>
                                        </span>
                        @endif
                    </div>
                </div>

                <div class="form-group row">
                    <label for="birthday" class="col-md-4 col-form-label text-md-right font-weight-bold">Дата рождения </label>

                    <div class="col-md-6">
                        <input id="birthday" type="date" class="form-control{{ $errors->has('birthday') ? ' is-invalid' : '' }}" name="birthday" value="{{$user->birthday }}">

                        @if ($errors->has('birthday'))
                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('birthday') }}</strong>
                                        </span>
                        @endif
                    </div>
                </div>

                <div class="form-group row">
                    <label for="sex" class="col-md-4 col-form-label text-md-right font-weight-bold">Ваш пол </label>

                    <div class="col-md-6">
                        <select id="sex" class="custom-select-lg {{ $errors->has('sex') ? ' is-invalid' : '' }}" name="sex">
                            <option {{ $user->sex === null ? 'selected':'' }} disabled>Выберите пол</option>
                            <option value="mail" {{ $user->sex == 'mail' ? 'selected':'' }}>Мужской</option>
                            <option value="female" {{ $user->sex == 'female' ? 'selected':'' }}>Женский</option>
                            @if ($errors->has('sex'))
                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('sex') }}</strong>
                                        </span>
                            @endif
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="country" class="col-md-4 col-form-label text-md-right font-weight-bold">Страна </label>

                    <div class="col-md-6">
                        <input id="country" type="text" class="form-control{{ $errors->has('country') ? ' is-invalid' : '' }}" name="country" value="{{$user->country }}">

                        @if ($errors->has('country'))
                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('country') }}</strong>
                                        </span>
                        @endif
                    </div>
                </div>

                <div class="form-group row">
                    <label for="city" class="col-md-4 col-form-label text-md-right font-weight-bold">Город </label>

                    <div class="col-md-6">
                        <input id="city" type="text" class="form-control{{ $errors->has('city') ? ' is-invalid' : '' }}" name="city" value="{{$user->city }}">

                        @if ($errors->has('city'))
                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('city') }}</strong>
                                        </span>
                        @endif
                    </div>
                </div>

                <div class="form-group row">
                    <label for="description" class="col-md-4 col-form-label text-md-right font-weight-bold">О себе </label>

                    <div class="col-md-6">
                        <textarea id="description" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}">{{$user->description }}
                        </textarea>

                        @if ($errors->has('description'))
                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('description') }}</strong>
                                        </span>
                        @endif
                    </div>
                </div>

                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary mb-2">
                            Сохранить изменения
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection