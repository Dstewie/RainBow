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
		Route::get('register', array('as' => 'login.register', 'uses' => 'LoginController@register'));
		Route::post('login', 'LoginController@login');
		Route::post('register', 'LoginController@store');
	}
);

Route::resource('login', 'LoginController');

Route::resource('countries', 'CountriesController');

Route::controller('/', 'IndexController');