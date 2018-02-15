@extends('layouts.main')

@section('content')

<div class="student-main">
    <div>
        <img class="img-student" src="/storage/{{ $user->photo_path }}">
    </div>
    <div class="student-information">
        <h2 class="log-student-information">{{ $user->name }}</h2>
        <h5>Аккаунт создан {{ $user->created_at->toDateString() }}</h5>
    </div>
</div>

@if($user->robots)
    <h2 class="center">Роботы этого робототехника</h2>

    <div class="robots">
    @foreach($user->robots as $robot)
        <a href="{{route('robots.show', $robot)}}"><div class="robotinrobots">
                <img src="/storage/{{$robot->photo_path}}" class="img-robotinrobots">
                <div class="name-robotinrobots">
                    <h2>{!! nl2br($robot->name) !!}</h2>
                </div>
            </div></a>
    @endforeach
        </div>
@endif

@endsection