@extends('layouts.admin.admin')

@section('title','Пользователи')

@section('content')
    <div>
        <h1>{{$users->count()}} пользователей</h1>

    </div>
    <div>

        <table>
            <tr>
                <th>Имя</th>
                <th>Профессия</th>
                <th>Дата регистрации</th>
                <th>Статус подписки</th>
            </tr>
            @foreach($users as $user)
                <tr>
                    <td class="text-left"><img class="avatar" src="{{ asset('/storage/'.$user->photo)}}"> {{$user->name.' '.$user->surname}}</td>
                    {{--@if($user->professions->isNotEmpty())--}}
                        {{--<td>--}}
                            {{--@foreach($user->professions as $profession)--}}
                                {{--{{$profession->name}}<br>--}}
                            {{--@endforeach--}}
                        {{--</td>--}}
                    {{--@else--}}
                        {{--<td>Не указано</td>--}}
                    {{--@endif--}}

                    <td>{{date('d.m.Y',strtotime($user->created_at))}}</td>

                    <td>
                        {{--<a class="subscribeLink" href="{{$user->usersubscribers->where('owner_id',auth()->id())->isNotEmpty() ? route('deleteSubscriber',$user->id) : route('addSubscriber',$user->id)}}">{{$user->usersubscribers->where('owner_id',auth()->id())->isNotEmpty() ?'Отписаться' : 'Подписаться'}}</a>--}}
                    </td>
                </tr>

            @endforeach

        </table>
    </div>
@endsection