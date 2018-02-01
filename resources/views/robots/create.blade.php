@extends('layouts.main')

@section('content')

<div class="center">
    <h3>Добавление робота</h3>
</div>
<form method="POST" enctype="multipart/form-data" action="/robots">
    {{ csrf_field() }}
    <input class="reg-input" placeholder="Название робота" name="name" MAXLENGTH="24" value="{{ old('name') }}">
    <textarea MAXLENGTH="5000" class="reg-input" placeholder="Описание робота" name="description"  required>{{ old('description') }}</textarea>
    <textarea MAXLENGTH="5000" axlength="1000" class="reg-input" placeholder="Характеристика робота" name="characteristics" required>{{ old('characteristics') }}</textarea>
    <textarea MAXLENGTH="5000" class="reg-input" placeholder="Достижения робота" name="achivments">{{ old('achivments') }}</textarea>
    <h4>Программа робота</h4>
    <input type="file" class="reg-input" name="program">
    <h4>Модель робота</h4>
    <input type="file" class="reg-input" name="model">
    <h4>Фотография робота</h4>
    <input type="file" class="reg-input" accept="image/*" name = "photo" required>
    <input class="reg-input margin-bottom" type="submit">
</form>

@if ($errors->any())
    <div class="alert center">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@endsection