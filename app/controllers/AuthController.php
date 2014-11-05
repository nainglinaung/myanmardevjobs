<?php

class AuthController extends \BaseController {

	/**
	* @return Response
	* @author SetKyar
	*/
	public function LoginWithFacebook()
	{
		$facebook = new Facebook(Config::get('facebook'));
	    $params = array(
	        'redirect_uri' => url('/login/fb/callback'),
	        'scope' => 'email',
	    );
	    return Redirect::to($facebook->getLoginUrl($params));
	}

	/**
	* @return Response
	* @author SetKyar
	*/
	public function LoginWithFacebookCallBack()
	{
		$code = Input::get('code');
	    if (strlen($code) == 0) return Redirect::to('/')->with('message', 'There was an error communicating with Facebook');

	    $facebook = new Facebook(Config::get('facebook'));
	    $uid = $facebook->getUser();

	    if ($uid == 0) return Redirect::to('/')->with('message', 'There was an error communicating with Facebook');

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

	/**
	* @return Logging out user's with message
	* @author SetKyar
	*/
	public function Logout()
	{
		Auth::logout();
    	return Redirect::to('/')->with('message', 'You had successfully logouted!');
	}

}