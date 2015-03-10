<?php

class Performance extends \Eloquent {
	protected $fillable = ['premio_reconocimiento', 'resultado_evaluacion', 'evaluacion_reemplazo', 'motivo_acta_admin', 'user_id'];

	public function user()
	{
		return $this->belongsTo('User');
	}
}