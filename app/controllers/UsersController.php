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
		$current_user = array();

	    if (Auth::check()) {
	        $current_user = Auth::user();
	    }

		$title = "Myanma Dev Jobs | User's Dashboard";

		return View::make('Users.index', compact('title', 'current_user'));
	}

	/**
	 * Store a newly created resource in storage.
	 * POST users/user
	 *
	 * @return Response
	 */
	public function store()
	{
		
	}
}