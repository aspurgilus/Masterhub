@extends('layouts.app')

@section('title','Профиль')



@section('content')

    <div class="col-md-8 mx-auto">
        <div class="row">
            <div class="col-md-2 pb-0">
                <img class="bigavatar" src="{{ asset('/build/images/profile'.$user->photo) }}">
            </div>
            <div class="col-md-6 p-2 ml-5">
                <h2>{{$user->name.' '.$user->surname}}</h2>
                {{--<p><span class="datafield mr-3">Количество подписчиков: {{$subs->count()}}</span>--}}
                    {{--<span class="datafield mr-3">Подписок: {{$subscriptions->count()}}</span></p>--}}
                <p><span>На Masterhub с {{date('Y',strtotime($user->created_at))}}</span></p>

            </div>
        </div>

        <a class="mt-0 ml-lg-3" href="{{ route('profile.edit',[$user->id]) }}">Редактировать</a>
        <ul class="list-unstyled mt-4">
            <li><span class="font-weight-bold mr-5">Имя: </span>{{$user->name}}</li>
            <li><span class="font-weight-bold mr-3">Фамилия: </span>{{$user->fathername}}</li>
            <li><span class="font-weight-bold mr-3">Отчество: </span>{{$user->surname}}</li>
            <li><span class="font-weight-bold mr-5">EMail: </span>{{$user->email}}</li>
        </ul>

        {{--<h4 class="font-weight-bold mt-4">Занимаемые должности</h4>--}}
        {{--@foreach($professions as $profession)--}}
            {{--<span class="font-italic ml-5 mr-5">{{$profession->name}}</span>--}}
        {{--@endforeach--}}
        {{--<div>--}}
            {{--<h4 class="font-weight-bold mt-4 mr-3">Подписки на вас</h4>--}}
            {{--<div>--}}
                {{--<table>--}}
                    {{--<tr>--}}
                        {{--<th>Имя</th>--}}
                        {{--<th>Профессия</th>--}}
                        {{--<th>Дата регистрации</th>--}}
                    {{--</tr>--}}
                    {{--@foreach($subs as $sub)--}}
                        {{--@if($user = \App\User::find($sub->owner_id))--}}
                            {{--<tr>--}}
                                {{--<td class="text-left"><img class="avatar" src="{{ asset('/storage/'.$user->photo)}}"> {{$user->name.' '.$user->surname}}</td>--}}
                                {{--@if($user->professions)--}}
                                    {{--<td>--}}
                                        {{--@foreach($user->professions as $profession)--}}
                                            {{--{{$profession->name}}<br>--}}
                                        {{--@endforeach--}}
                                    {{--</td>--}}
                                {{--@else--}}
                                    {{--<td>Не указано</td>--}}
                                {{--@endif--}}

                                {{--<td>{{date('d.m.Y',strtotime($sub->created_at))}}</td>--}}
                            {{--</tr>--}}
                        {{--@endif--}}
                    {{--@endforeach--}}
                {{--</table>--}}
            {{--</div>--}}
        {{--</div>--}}
    </div>
@endsection