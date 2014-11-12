<?php

class Company extends \Eloquent {

	public function user()
    {
        return $this->belongsTo('User');
    }

    public function joblister()
    {
        return $this->hasMany('JobLister');
    }
}