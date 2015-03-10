<?php

class TrajectoryOE extends \Eloquent {
	protected $fillable = ['puesto_desenpenado', 'nombre_empresa', 'motivo_separacion', 'user_id'];

	public function user()
	{
		return $this->belongsTo('User');
	}
}