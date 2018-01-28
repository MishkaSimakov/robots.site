@extends('layouts.main')

@section('content')

  <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
    {{ csrf_field() }}

    <div class="input-text margin-top">
      <input MAXLENGTH="24" placeholder="Имя" id="name" type="text" name="name" class="reg-input reg-input-student"
             value="{{ old('name') }}" required autofocus>
    </div>

    <div class="input-text">
      <input placeholder="E-mail" id="email" type="email" name="email" class="reg-input reg-input-student"
             value="{{ old('email') }}" required>
    </div>

    <h4>Фото аккаунта</h4>
    <div class="input-text">
      <input id="photo" type="file" name="photo" class="reg-input reg-input-student" accept="image/*"
             required>
    </div>

    <div class="input-text">
      <input MINLENGTH="5" placeholder="Пароль" id="password" type="password" class="reg-input reg-input-student" name="password" required>
    </div>

    <div class="input-text">
      <input placeholder="Повторите пароль" id="password-confirm" type="password" class="reg-input reg-input-student"
             name="password_confirmation" required>
    </div>

    <div class="input-text margin-bottom">
      <button class="reg-input" type="submit">
        Зарегистрироваться
      </button>
    </div>

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
