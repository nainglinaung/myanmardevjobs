<?php

class JobLister extends \Eloquent {
	
	protected $table = 'job_listers';

    public function company()
    {
        return $this->belongsTo('Company');
    }

}