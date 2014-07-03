@extends('main_layout')

@section('title')
	Система администрирования сайта
@stop

@section('content')
		<div class="lb-wrap">
			<div class="lb-content">
			{{Form::open(array('route'=>'login.index', 'method'=>'POST'))}}
					<h1>Вход</h1>
					<div class="f-item">
						{{Form::label('username', 'Логин')}}
						{{Form::text('username')}}
					</div>
					<div class="f-item">
						{{Form::label('password', 'Пароль')}}
						{{Form::password('password')}}
					</div>
					<input type="submit" id="login" name="login" value="Вход" class="gradient-button"/>
			{{Form::close()}}
			</div>
		</div> 
@stop