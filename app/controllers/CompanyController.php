<?php 

class CompanyController extends \BaseController
{
	/**
	 * Store a newly created resource in storage.
	 * POST users/user
	 *
	 * @return Response
	 */
	public function store()
	{
		$company = new Company;

		$company->user_id 		= Auth::user()->id;
		$company->company_logo 	= '';
		$company->company_name	= Input::get('comapny_name');
		$company->company_website	= Input::get('company_website');
		$company->company_address	= Input::get('company_address');
		$company->save();

		Session::flash('message', 'Successfully updated your company information');
        
        return Redirect::to('users/user');
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET users/user/company/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{	
		$title = 'Edit Your Company information';

		$company = Company::find($id);

		return View::make('Users.company_edit', compact('title', 'company'));
	}
	
	/**
	 * Update the specified resource in storage.
	 * PUT /users/company/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{	
		$company = Company::find($id);
		$current_user_id = Auth::id();

		if ($company->user_id === $current_user_id) {
			// store
	        $company->user_id 		= Auth::user()->id;
			$company->company_logo 	= '';
			$company->company_name	= Input::get('comapny_name');
			$company->company_website	= Input::get('company_website');
			$company->company_address	= Input::get('company_address');
			$company->save();

	        // redirect
	        Session::flash('message', 'Successfully Updated Your Company Info!');
	        return Redirect::to('users/user');	
		} else {
			Session::flash('message', 'Something wrong with URL!');
	        return Redirect::to('users/user');	
		}
	}
}