@extends('layouts.main')

@section('content')
  <form method="POST" action="{{ route('register') }}">
    {{ csrf_field() }}

    <div class="input-text">
      <label for="name">Name</label>
      <input id="name" type="text" name="name" class="reg-input reg-input-student"
             value="{{ old('name') }}" required autofocus>
      @if ($errors->has('name'))
        <p> Ошибка в имени!!!</p>
      @endif
    </div>

    <div class="input-text">
      <label for="email">E-Mail Address</label>
      <input id="email" type="email" name="email" class="reg-input reg-input-student"
             value="{{ old('email') }}" required>
    </div>

    <div class="input-text">
      <label for="password">Password</label>
      <input id="password" type="password" class="reg-input reg-input-student" name="password" required>
    </div>

    <div class="input-text">
      <label for="password-confirm">Confirm Password</label>
      <input id="password-confirm" type="password" class="reg-input reg-input-student"
             name="password_confirmation" required>
    </div>

    <div class="input-text">
      <button class="reg-input" type="submit">
        Register
      </button>
    </div>

  </form>
@endsection
