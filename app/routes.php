<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


Route::group(array('before'=>'un_auth'), function(){
		Route::get('login', array('as' => 'login.index', 'uses' => 'LoginController@index'));
		Route::get('registration', array('as' => 'login.registration', 'uses' => 'LoginController@registration'));
		Route::post('login', array('uses' => 'LoginController@login'));
		Route::post('registration', array('uses' => 'LoginController@store'));
	}
);

Route::controller('/', 'IndexController');
