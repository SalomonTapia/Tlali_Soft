<?php

class TrajectoryDE extends \Eloquent {
	protected $fillable = ['puesto_actual', 'fecha_ingreso', 'antiguedad', 'sueldo', 'area_departamento', 'user_id'];

	public function user()
	{
		return $this->belongsTo('User');
	}
}