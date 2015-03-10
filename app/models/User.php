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
	protected $hidden = array('password', 'remember_token');


	public function informationA()
	{
		return $this->hasOne('InformationA');
	}

	public function informationF()
	{
		return $this->belongsToMany('InformationF');
	}

	public function informationM()
	{
		return $this->hasOne('InformationM');
	}

	public function informationP()
	{
		return $this->hasOne('InformationP');
	}

	public function performance()
	{
		return $this->hasOne('Performance');
	}

	public function training()
	{
		return $this->hasMany('Training');
	}

	public function trajectoryDE()
	{
		return $this->hasOne('TrajectoryDE');
	}

	public function trajectoryOE()
	{
		return $this->hasMany('TrajectoryOE');
	}
}
