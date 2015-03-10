<?php

class InformationM extends \Eloquent {
	protected $fillable = ['tipo_sangre', 'enfer_cronicas_alergias', 'numero_emergencia', 'user_id'];

	public function user()
	{

		return $this->belongsTo('User');
	} 
}