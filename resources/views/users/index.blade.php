@extends('layouts.main')

@section('content')

<div class="students">
@foreach ($users as $user)
<a href="{{route('users.show', $user)}}"><div class="studentinstudents">
        <img class="img-studentinstudents" src="/storage/{{$user->photo_path}}">
        <div class="name-studentinstudents"><h2>{!! nl2br($user->name) !!}</h2></div>
    </div></a>
@endforeach
</div>

@endsection