<?php

class Wall extends Eloquent {
	protected $fillable = [];

	public function blast ()
	{
		return $this->hasMany('Blast');
	}
}