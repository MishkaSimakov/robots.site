@include('layouts.partials.head')

<h1 class="center margin-top">Вы зарегистрировались!</h1>

@if(isset($robots))
  <h2 class="center margin-top">Ваши роботы</h2>

  <div class="robots">
    @foreach($robots as $robot)
      <a href="{{route('robots.show', $robot)}}"><div class="robotinrobots">
          <img src="/storage/{{$robot->photo_path}}" class="img-robotinrobots">
          <div class="name-robotinrobots">
            <h2>{!! nl2br($robot->name) !!}</h2>
          </div>
        </div></a>
    @endforeach
  </div>
@endif

@include('layouts.partials.footer')