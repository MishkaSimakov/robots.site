@extends('layouts.main')

@section('content')

<div class="robot-main">
    <div>
        <img class="img-robot" src="/storage/{{ $robot->photo_path }}">
    </div>
    <div class="robot-information">
        <h2 class="log-information">{!! nl2br($robot->name) !!}</h2>
        <h5 style="float: left; text-align: right"><a class="name"  href="{{ route('users.show', $student['id'])}}">{{ $student['name'] }}</a> <sup>{{ $robot->created_at->toDateString() }}</sup></h5>
        <h5>{!! nl2br($robot->description) !!}</h5>
        <div class="robot-programs">
            @if($robot->model_path)
            <a class="robot-program" href="/storage/{{ $robot->model_path }}">Модель робота</a>
            @endif
            @if($robot->program_path)
            <a class="robot-program" href="/storage/{{ $robot->program_path }}">Программа робота</a>
                @endif
        </div>
    </div>
</div>


<div class="robot-characteristic margin-bottom">
    <h2>Характеристики</h2>
    <h3>{!! nl2br($robot->characteristics) !!}</h3>
</div>
@if($robot->achivments)
<div class="robot-achievements margin-bottom">
    <h2>Достижения</h2>
    <h3>{!! nl2br($robot->achivments) !!}</h3>
</div>
@endif

@endsection
