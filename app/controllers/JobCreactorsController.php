<?php

class JobCreactorsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /jobcreactors
	 *
	 * @return Response
	 * @author Setkyar
	 */
	public function index()
	{
		$jobs = JobCreactor::all();

		return Response::json([

			'data'	=> $this->transformCollection($jobs);

		], 200);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /jobcreactors/create
	 *
	 * @return Response
	 * @author Setkyar
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /jobcreactors
	 *
	 * @return Response
	 * @author Setkyar
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /jobcreactors/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 * @author Setkyar
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /jobcreactors/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 * @author SetKyar
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /jobcreactors/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 * @author SetKyar
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /jobcreactors/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 * @author SetKyar
	 */
	public function destroy($id)
	{
		//
	}

	/**
	* Transform a collection of jobs
	*
	* @param $jobs
	* @return array
	* @author SetKyar
	*/
	private function transformCollection($jobs)
	{
		return array_map([$this, 'transform'], $jobs->toArray());
	}

	
	//
	/**
	* Transform a collection of jobs
	*
	* 'active' => (boolean) $jobs['someboolean']
	*
	* @param $jobs
	* @return array
	* @author SetKyar
	*/
	private function transform($jobs)
	{	
		
		return [
			'title'		=> $jobs['title'],
			'imgurl'	=> $jobs['imgurl']
		];
		
	}

}