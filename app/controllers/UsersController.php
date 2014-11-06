<?php

class UsersController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET users/user
	 *
	 * @return Response
	 */
	public function index()
	{
		$title = "Myanma Dev Jobs | User's Dashboard";

		$current_user = array();

	    if (Auth::check()) {
	        $current_user = Auth::user();
	    }		

	    $total_company = Company::all()->count();

	    if ($total_company !== 0) {
	    	$company = Company::where('user_id', '=', Auth::user()->id)->firstOrFail();
	    } else {
	    	$company = '';
	    }

		return View::make('Users.index', compact('title', 'current_user', 'company'));
	}

}