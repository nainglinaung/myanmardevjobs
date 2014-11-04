<?php

class HomeController extends BaseController {

	/**
	* @return Responsive
	* @author SetKyar
	*/
	public function ShowAllJobs()
	{
		$title = 'Myanmar Dev Jobs';

		$jobs = JobLister::all();
		
		return View::make('jobs.index', compact('title', 'jobs'));
	}
}
