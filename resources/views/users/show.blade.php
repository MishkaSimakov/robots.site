@include('layouts.partials.head')

<div class="student-main">
    <div>
        <img class="img-student" src="/storage/{{ $user->photo_path }}">
    </div>
    <div class="student-information">
        <h2 class="log-student-information">{!! nl2br($user->name) !!}</h2>
    </div>
</div>

@if(isset($hisRobots))
    <h2 class="center">Роботы этого робототехника</h2>

    <div class="robots">
    @foreach($hisRobots as $hisRobot)
        <a href="{{route('robots.show', $hisRobot)}}"><div class="robotinrobots">
                <img src="/storage/{{$hisRobot->photo_path}}" class="img-robotinrobots">
                <div class="name-robotinrobots">
                    <h2>{!! nl2br($hisRobot->name) !!}</h2>
                </div>
            </div></a>
    @endforeach
        </div>
@endif



@include('layouts.partials.footer')