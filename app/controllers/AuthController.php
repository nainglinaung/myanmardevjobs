<?php

class AuthController extends \BaseController {

	/**
	 * Store a newly created resource in storage.
	 * POST /auth
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
	 * GET /auth/{id}
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
	 * GET /auth/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 * @author Setkyar
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /auth/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 * @author Setkyar
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /auth/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 * @author Setkyar
	 */
	public function destroy($id)
	{
		//
	}

	public function LoginWithFacebook()
	{
		$facebook = new Facebook(Config::get('facebook'));
	    $params = array(
	        'redirect_uri' => url('/login/fb/callback'),
	        'scope' => 'email',
	    );
	    return Redirect::to($facebook->getLoginUrl($params));
	}

	public function LoginWithFacebookCallBack()
	{
		$code = Input::get('code');
	    if (strlen($code) == 0) return Redirect::to('/')->with('message', 'There was an error communicating with Facebook');

	    $facebook = new Facebook(Config::get('facebook'));
	    $uid = $facebook->getUser();

	    if ($uid == 0) return Redirect::to('/')->with('message', 'There was an error');

	    $me = $facebook->api('/me');

	    $profile = Profile::whereUid($uid)->first();

	    if (empty($profile)) {

	        $user = new User;
	        $user->name = $me['first_name'].' '.$me['last_name'];
	        $user->email = $me['email'];
	        $user->photo = 'https://graph.facebook.com/'.$uid.'/picture?type=large';

	        $user->save();

	        $profile = new Profile();
	        $profile->uid = $uid;
	        $profile->username = $me['first_name'].' '.$me['last_name'];
	        $profile = $user->profiles()->save($profile);
	    }

	    $profile->access_token = $facebook->getAccessToken();
	    $profile->save();

	    $user = $profile->user;

	    Auth::login($user);

	    return Redirect::to('/users/user')->with('message', 'You had successfully logined!');
	}

	public function Logout()
	{
		Auth::logout();
    	return Redirect::to('/')->with('message', 'You had successfully logouted!');
	}

}