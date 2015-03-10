<?php

class Training extends \Eloquent {
	protected $fillable = ['nom_curso', 'duracion_horas', 'empresa_impartio', 'documento', 'user_id'];

	public function user()
	{
		return $this->belongsTo('User');
	}
}