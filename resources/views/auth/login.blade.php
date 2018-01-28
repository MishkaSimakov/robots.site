@extends('layouts.main')

@section('content')
    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
        {{ csrf_field() }}

        <div class="margin-top input-text form-group{{ $errors->has('email') ? ' has-error' : '' }}">

            <div class="col-md-6">
                <input placeholder="E-mail" id="email" type="email" class="form-control reg-input reg-input-student" name="email" value="{{ old('email') }}" required autofocus>

                @if ($errors->has('email'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                @endif
            </div>
        </div>

        <div class="input-text form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            <div class="col-md-6">
                <input placeholder="Пароль" id="password" type="password" class="form-control reg-input reg-input-student" name="password" required>

                @if ($errors->has('password'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                @endif
            </div>
        </div>

        <div class="form-group input-text">
            <div class="col-md-6 col-md-offset-4">
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>Запомнить меня
                    </label>
                </div>
            </div>
        </div>

        <div class="form-group input-text">
            <div class="col-md-8 col-md-offset-4 ">
                <button type="submit" class="btn btn-primary reg-input login-input">
                    Войти
                </button>

                <a class="btn btn-link login-pas " href="{{ route('password.request') }}">
                    Забыли пароль?
                </a>
            </div>
        </div>
    </form>
@endsection
