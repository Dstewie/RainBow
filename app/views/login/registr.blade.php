@extends('main_layout')

@section('title')
	Регистрация нового пользователя
@stop

@section('content')

	<div class="lb-wrap">
			<div class="lb-content">
				{{Form::open(array('route'=>'login.register', 'method'=>'POST'))}}
					<h1>Регистрация</h1>
					<div class="f-item">
						<label for="f_name">Username</label>
						<input type="text" id="u_name" name="u_name" />
					</div>
					<div class="f-item">
						<label for="email">E-mail</label>
						<input type="email" id="email" name="email" />
					</div>
					<div class="f-item">
						<label for="password">Password</label>
						<input type="password" id="password" name="password" />
					</div>
					<input type="submit" id="register" name="register" value="Зарегистрироваться" class="gradient-button"/>
				{{Form::close()}}
			</div>
		</div>

@stop