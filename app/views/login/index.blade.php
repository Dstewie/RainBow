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
						<label for="email">Логин</label>
						<input type="email" id="email" name="email" />
					</div>
					<div class="f-item">
						<label for="password">Пароль</label>
						<input type="password" id="password" name="password" />
					</div>
					<input type="submit" id="login" name="login" value="Вход" class="gradient-button"/>
			{{Form::close()}}
			</div>
		</div> 
@stop