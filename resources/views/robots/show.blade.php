@include('layouts.partials.head')

<div class="robot-main">
    <div>
        <img class="img-robot" src="/storage/{{ $robot->photo_path }}">
    </div>
    <div class="robot-information">
        <h2 class="log-information">{{ $robot->name }}</h2>
        <p>{{ nl2br($robot->description) }}</p>
        <div class="robot-programs">
            <a class="robot-program" href="/storage/{{ $robot->model_path }}">Модель робота</a>
            <a class="robot-program" href="/storage/{{ $robot->program_path }}">Программа робота</a>
        </div>
    </div>
</div>


<div class="robot-characteristic">
    <h2>Характеристики</h2>
    <h3>{{$robot->characteristics}}</h3>
</div>
<div class="robot-achievements">
    <h2>Достижения</h2>
    <h3>{{ $robot->achivments }}</h3>
</div>

@include('layouts.partials.footer')
