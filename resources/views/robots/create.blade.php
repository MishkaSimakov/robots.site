@include('layouts.partials.head')

<div>
    <h3>Добавление робота</h3>
</div>
<form method="POST" enctype="multipart/form-data" action="/robots">
    {{ csrf_field() }}
    <input class="reg-input" placeholder="Название робота" name="name">
    <input class="reg-input" placeholder="Студент" name="student_id">
    {{--<select name="robot_category" multiple size="6" class="reg-input">--}}
        {{--<option>сумо</option>--}}
        {{--<option>движение по линии</option>--}}
        {{--<option>дабиринт</option>--}}
        {{--<option>творческая категория</option>--}}
        {{--<option>футбол роботов</option>--}}
        {{--<option selected>другое</option>--}}
    {{--</select>--}}
    <textarea class="reg-input" placeholder="Описание робота" name="description" required></textarea>
    <textarea class="reg-input" placeholder="Характеристика робота" name="characteristics" required></textarea>
    <textarea class="reg-input" placeholder="Достижения робота" name="achivments"></textarea>
    <h4>Программа робота</h4>
    <input type="file" class="reg-input" name="program">
    <h4>Модель робота</h4>
    <input type="file" class="reg-input" name="model">
    <h4>Фотография робота</h4>
    <input type="file" class="reg-input" accept="image/*" name = "photo" required>
    <input class="reg-input" type="submit">
</form>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@include('layouts.partials.footer')