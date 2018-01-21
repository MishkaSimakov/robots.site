@include('partials.head')

<div class="robot-main">
    <div>
        <img class="img-robot" src="{{ $robot->photo_path }}">
    </div>
    <div class="robot-information">
        <h2 class="log-information">{{ $robot->name }}</h2>
        <p>{{ nl2br($robot->description) }}</p>
        <div class="robot-programs">
            <div class="robot-program">Модель робота</div>
            <div class="robot-program">Программа робота</div>
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

@include('partials.footer')
