<?php

class Blast extends Eloquent {
	protected $fillable = [];

	public function wall()
    {
        return $this->belongsTo('Wall');
    }
    public function getCreatedAtAttribute($date)
	{
	    return Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('H:i:s');
	}

	public function getUpdatedAtAttribute($date)
	{
	    return Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('H:i:s');
	}
}