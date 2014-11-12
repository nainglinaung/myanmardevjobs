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

	    $companyinfo = Company::wherefb_user_id($uid)->first();

	    if (empty($companyinfo)) {

	        $user = new User;
	        $user->name = $me['first_name'].' '.$me['last_name'];
	        $user->email = $me['email'];
	        $user->photo = 'https://graph.facebook.com/'.$uid.'/picture?type=large';

	        $user->save();

	        $companyinfo = new Company();
	        $companyinfo->fb_user_id = $uid;
	        $companyinfo = $user->companyinformation()->save($companyinfo);
	    }
	    $companyinfo->save();

	    $user = $companyinfo->user;

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