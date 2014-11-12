<?php 

class CompanyController extends \BaseController
{
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
		 $rules = array(
            'company_name'       => 'required',            
            'company_website'    => 'required',
            'company_address'    => 'required',
            'company_logo'		 => 'mimes:jpeg,bmp,png'           
        );

		$validator = Validator::make(Input::all(), $rules);

		if ($validator->fails()) {
			return Redirect::to('users/company/' . $id . '/edit')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
		} else {
			$company = Company::find($id);

			$current_user_id = Auth::id();

			if ($company->user_id === $current_user_id) {
				// store
		        $company->user_id 		= Auth::user()->id;
		        $company->company_name		= Input::get('company_name');
				$company->company_website	= Input::get('company_website');
				$company->company_address	= Input::get('company_address');

				//Start For Imgaes
				if (Input::hasFile('company_logo')) {
					$file 	= Input::file('company_logo');
					$destinationPath = public_path().'/upload/';
					$filename        = str_random(6) . '_' . $file->getClientOriginalName();
					$uploadSuccess   = $file->move($destinationPath, $filename);
					$company->company_logo = $filename;
				}

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
}