@extends('main_layout')

@section('title')
	Регистрация нового пользователя
@stop

@section('content')

	<div class="lb-wrap">
			<div class="lb-content">
				{{Form::open(array('route'=>'login.registration', 'method'=>'POST'))}}
					<h1>Регистрация</h1>
					<div class="f-item">
						{{Form::label('username', 'Login')}}
						{{Form::text('username')}}
					</div>
					<div class="f-item">
						{{Form::label('email', 'E-mail')}}
						{{Form::text('email')}}
					</div>
					<div class="f-item">
						{{Form::label('password', 'Password')}}
						{{Form::password('password')}}
					</div>
					<input type="submit" id="register" name="register" value="Зарегистрироваться" class="gradient-button"/>
				{{Form::close()}}
				@foreach($errors->all() as $error)
					{{$error}}
				@endforeach
			</div>
		</div>

@stop