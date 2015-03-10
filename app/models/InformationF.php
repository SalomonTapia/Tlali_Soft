<?php

class InformationF extends \Eloquent {
	protected $fillable = ['personas_dependientes', 'nombre_conyuge', 'ocupacion_conyuge', 'nombre_hijos', 'ocupacion_hijos', 'nombre_padre', 'ocupacion_padre', 'nombre_madre', 'ocupacion_madre', 'tel_conyuge', 'tel_padre', 'tel_madre', 'user_id'];

	public function user()
	{
		return $this->belongsToMany('User');
	}
}