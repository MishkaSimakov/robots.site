@extends('layouts.main')

@section('content')

<div class="robots">

  @auth
    <a href="/robots/create"><div class="robotinrobots">
            <div class="name-robotinrobots">
                <h2>Добавить робота</h2>
            </div>
        </div></a>
  @endauth

    @foreach ($robots as $robot)

    <a href="{{route('robots.show', $robot)}}"><div class="robotinrobots">
            <img src="/storage/{{$robot->photo_path}}" class="img-robotinrobots">
            <div class="name-robotinrobots">
              <h2><p>{!! nl2br($robot->name) !!}</p></h2>
            </div>
        </div></a>
    @endforeach
</div>

@endsection