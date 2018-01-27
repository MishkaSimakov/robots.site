@extends('layouts.main')

@section('content')
  <form method="POST" action="{{ route('register') }}">
    {{ csrf_field() }}

    <div class="form-group">
      <label for="name">Name</label>
      <input id="name" type="text" name="name"
             value="{{ old('name') }}" required autofocus>
      @if ($errors->has('name'))
        <p> Ошибка в имени!!!</p>
      @endif
    </div>

    <div class="form-group">
      <label for="email">E-Mail Address</label>
      <input id="email" type="email" name="email"
             value="{{ old('email') }}" required>
    </div>

    <div class="form-group">
      <label for="password" class="col-md-4 control-label">Password</label>
      <input id="password" type="password" class="form-control" name="password" required>
    </div>

    <div class="form-group">
      <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>
      <input id="password-confirm" type="password" class="form-control"
             name="password_confirmation" required>
    </div>

    <div class="form-group">
      <button type="submit">
        Register
      </button>
    </div>

  </form>
@endsection
