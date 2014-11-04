<?php

Route::get('/', 'HomeController@ShowAllJobs');

//Authernication
Route::get('login/fb', 'AuthController@LoginWithFacebook');
Route::get('login/fb/callback', 'AuthController@LoginWithFacebookCallBack');


Route::group(array('before' => 'auth'), function()
{
	//Users
	Route::resource('users/user', 'UsersController');
	Route::resource('users/joblisters', 'JobListersController');

	// Users Logout
	Route::get('users/logout', 'AuthController@Logout');
});
