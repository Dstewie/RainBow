<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array(
		'password',
		'remember_token'
	);
	
	/**
	 * Data label from forms.
	 *
	 * @var array
	 */
	
	protected $fillable = array(
		'username',
		'email',
		'password',
		'remember_token'
	);
	
	protected $guarded = array(
		'id',
		'create_at',
		'update_at'
	);
	
	public static function getValidate(){
		$validation = array(
			'username' => 'required|alpha_num|between:3,10|unique:users,username',
			'password' => 'required|alpha_num|between:3,10',
			'email' => 'required|email|unique:users,email'
		);
		
		return $validation;
	}
	
	
	
	

}
