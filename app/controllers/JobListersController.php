<?php

class JobListersController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /joblisters
	 *
	 * @return Response
	 */
	public function index()
	{
		$title 		= "Myanma Dev Jobs | Jobs Lister Panel";

		$user_id 	= Auth::user()->id;
		$jobs 		= JobLister::where('user_id', '=', $user_id)->get();

		return View::make('JobListers.index', compact('title', 'jobs'));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /joblisters/create
	 *
	 * @return Response
	 */
	public function create()
	{
		$title = "Myanma Dev Jobs | Create New Jobs";

		return View::make('JobListers.create', compact('title'));
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /joblisters
	 *
	 * @return Response
	 */
	public function store()
	{
		$rules = array(
			'position_title'	=> 'required',
			'jobs_description'	=> 'required',
			'jobs_apply'		=> 'required',
			'jobs_contact'		=> 'required'
		);

		$validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
            return Redirect::to('users/joblisters/create')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {
            // store
            $lister = new JobLister;
            $lister->position_title 	= Input::get('position_title');
            $lister->jobs_description 	= Input::get('jobs_description');
            $lister->jobs_apply			= Input::get('jobs_apply');
            $lister->jobs_contact		= Input::get('jobs_contact');
            $lister->user_id			= Auth::user()->id;

            $lister->save();

            // redirect
            Session::flash('message', 'Successfully Posted Your Jobs Advertising');
            return Redirect::to('users/joblisters');
        }
	}

	/**
	 * Display the specified resource.
	 * GET /joblisters/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /joblisters/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$lister = JobLister::find($id);

        return View::make('users.joblisters.edit')
            ->with('lister', $lister);
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /joblisters/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$rules = array(
			'position_title'	=> 'required',
			'jobs_description'	=> 'required'
		);

		$validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
            return Redirect::to('users/joblisters/create')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {
            // store
            $lister = JobLister::find($id);
            $lister->position_title 	= Input::get('position_title');
            $lister->jobs_description 	= Input::get('jobs_description');
            $lister->user_id			= Auth::user()->id;

            $lister->save();

            // redirect
            Session::flash('message', 'Successfully Updated Your Jobs Advertising');
            return Redirect::to('users/joblisters');
        }
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /joblisters/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		
	}

}