<?php

class HomeController extends BaseController {

	/**
	* @return Return All the Jobs
	* @author SetKyar
	*/
	public function ShowAllJobs()
	{
		$title = 'Myanmar Dev Jobs';

		$jobs = JobLister::with('company')->paginate(10);

		return View::make('jobs.index', compact('title', 'jobs'));
	}

	/**
	* @return Return Specific Job
	* @author SetKyar
	*/
	public function JobDetails($id, $job_title)
	{
		$title = 'Myanmar Dev Jobs ' . $job_title;

		$lister = JobLister::with('company')->find($id);

		return View::make('jobs.detail', compact('lister', 'title'));
	}

	public function About()
	{
		$title = 'About Myanmar Dev Job!';

		$total_user = User::all()->count();
		
		return View::make('pages.about', compact('title','total_user'));
	}

	public function Search()
	{
		
	}
}
