<?php 

class AuthController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| AuthController
	|--------------------------------------------------------------------------
	|
	|
	*/
	
	/** 显示登录页面
	 * Display the signIn page
	 * @return View
	 */
	public function getSignIn(){
		return View::make('site::signUp');
	}	


	/** 登录
	 * SignIn action
	 * @return Redirect
	 */
	public function postSignIn(){
		$user = ['name'=>'admin','password'=>'admin','id'=>'1'];
		Session::put('user',$user);
		return Redirect::route('site.topic.index');
	}


	/** 注销
	 * Logout action
	 * @return Redirect
	 */
	public function getLogout()
	{
		Session::forget('user');
		return Redirect::route('site.signIn');	
	}

}
