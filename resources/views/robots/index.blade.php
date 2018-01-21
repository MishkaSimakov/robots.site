@include('partials.head')

<div class="robots">

    <a href="/new_robot"><div class="robotinrobots">
            <div class="name-robotinrobots">
                <h2>Добавить робота</h2>
            </div>
        </div></a>

    @foreach ($robots as $robot)

    <a href="{{route('robots.show', $robot)}}"><div class="robotinrobots">
            <img src="{{$robot->photo_path}}" class="img-robotinrobots">
            <div class="name-robotinrobots">
                <h2>{{$robot->name}}</h2>
            </div>
        </div></a>
    @endforeach
</div>

@include('partials.footer')