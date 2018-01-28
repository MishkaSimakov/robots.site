@include('layouts.partials.head')

<div class="robot-main">
    <div>
        <img class="img-robot" src="/storage/{{ $robot->photo_path }}">
    </div>
    <div class="robot-information">
        <h2 class="log-information">{!! nl2br($robot->name) !!}</h2>
        <h3 class="center">Этого робота сделал {{ $name }}</h3>
        <p>{!! nl2br($robot->description) !!}</p>
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

@include('layouts.partials.footer')
