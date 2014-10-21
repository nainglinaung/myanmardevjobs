<?php

class HomeController extends BaseController {

	/**
	* @return Responsive
	* @author SetKyar
	*/
	public function ShowAllJobs()
	{
		return View::make('index');
	}
}
