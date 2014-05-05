<?php 

class UserController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| UserController
	|--------------------------------------------------------------------------
	|
	|
	*/
	
	/** 获取 session 中的信息
	 *  
	 * @return Redirect
	 */
	public function get(){
		$user = Session::get('user');
		return Redirect::route('site.user.show',array($user['id']));
	}

	/** 展示信息
	 *  
	 * @return View
	 */
	public function show($id){
		$user = Session::get('user');
		return View::make('site::user/show')->with('user',$user);
	}
}