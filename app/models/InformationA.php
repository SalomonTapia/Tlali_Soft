<?php

class InformationA extends \Eloquent {
	protected $fillable = ['doctorado', 'maestria', 'especialidad', 'lic_ing', 'tsu', 'carrera-tecnica', 'bachillerato', 'doctoradoA', 'maestriaA', 'especialidadA', 'lic_ingA', 'tsuA', 'carrera_tecnicaA', 'bachilleratoA', 'user_id'];

	/**
	* One InformationA belongs to one User
	*/

	public function user()
	{
		return $this->belongsTo('User');
	}
}