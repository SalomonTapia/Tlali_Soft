<?php

class InformationP extends \Eloquent {
	protected $fillable = ['num_empleado', 'nombre', 'apellidos', 'rfc', 'curp', 'fecha_nacimiento', 'nss', 'domicilio', 'estado_civil', 'edad', 'sexo', 'tel_casa', 'tel_celular', 'email', 'tynlconducir', 'nacionalidad', 'dpviajar', 'acta_nacimiento', 'tynlconducirA', 'curpA', 'user_id'];

	public function user()
	{
		return $this->belongsTo('User');
	}
}