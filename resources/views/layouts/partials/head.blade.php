<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">


	<link rel="stylesheet" type="text/css" href="{{ asset('css/temp.css') }}">

	<title>Роботы</title>
</head>
<body>

<div class="flex">

<div class="top-div">
	<nav class="top-nav">
		<ul class="main-nav">
			<li><a class="button" href="/robots">Роботы</a></li>
			<li><a class="button" href="/users">Робототехники</a></li>
		</ul>

		<ul class="account-nav">
			@guest
			<li class="account"><a href="{{ route('login') }}">Вход</a></li>
			<li class="account"><a href="{{ route('register') }}">Регистрация</a></li>
			@else
				<li class="dropdown">
					<a href="/home" class="account" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
						{{ Auth::user()->name }} <span class="caret"></span>
					</a>

					<ul class="account">
						<li>
							<a href="{{ route('logout') }}"
							   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
								Выйти
							</a>

							<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
								{{ csrf_field() }}
							</form>
						</li>
					</ul>
				</li>
				@endguest
		</ul>
	</nav>
</div>